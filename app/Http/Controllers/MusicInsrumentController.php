<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Favourites;
use App\Feedback;
use App\Guitar;
use App\Keyboard;
use App\MusicInstruments;
use App\Order;
use App\Winds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use function GuzzleHttp\Promise\all;

class MusicInsrumentController extends Controller
{
    public function allTypes(){
        return DB::table('guitars')->get()->
        merge(DB::table('keyboards')->get())->
        merge(DB::table('winds')->get())->
        merge(DB::table('bows')->get())->
        merge(DB::table('percussions')->get())->
        merge(DB::table('accessories')->get());
    }

    public function search(Request $request){
        $search_query = $request->input('search');

        $result = DB::table('guitars', 'keyboards', 'winds', 'bows', 'percussions', 'accessories')
        ->where('name', 'like', '%' . $search_query . '%');

        return view('goods', ['data' => $result])->withTitle('Пошук');
    }

    public function getByName(Request $request){
        return view('goods', ['data' => DB::table($request->route()->getAction()['name'])->get()])->withTitle($request->route()->getAction()['title']);
    }

    public function news(){
        $result = DB::table('guitars')->latest()->get()->
        merge(DB::table('keyboards')->latest()->get())->
        merge(DB::table('winds')->latest()->get())->
        merge(DB::table('bows')->latest()->get())->
        merge(DB::table('percussions')->latest()->get())->
        merge(DB::table('accessories')->latest()->get());
        return view('goods', ['data' => $result])->withTitle('Новинки');
    }

    public function cabinet(){
        return view('my-account-main');
    }

    public function login(Request $request){
        if (Auth::attempt(['name' => $request->input('name'), 'password' => $request->input('password')], $request->has('remember')))
            return redirect()->route('home')->with('success', 'Дякуємо!');

    }

    public function sales(){
        $result = $this->allTypes()->where('discount', '>', 0);
        return view('goods', ['data' => $result])->withTitle('Знижки');
    }

    public function brands(){
        $result = $this->allTypes();
        return view('goods', ['data' => $result])->withTitle('Бренди');
    }

    public function chosen(){
        $favourites = DB::table('favourites')->where('user_id', '=', Auth::user()->id)->get(['instrument_id', 'type']);
        $idx = Favourites::all()->pluck('id');
        return view('my-account-chosen', ['data' => $this->allTypes()->whereIn('type', $favourites->pluck('type'))->whereIn('id', $favourites->pluck('instrument_id')), 'idx' => $idx])->withTitle('Обране');
    }

    public function addToChosen($type, $id){
        $user_id = Auth::user()->id;
        if (Favourites::where('instrument_id', '=', $id)->where('user_id', '=', $user_id)->first() == null) {
            $favourites = new Favourites;
            $favourites->user_id = $user_id;
            $favourites->instrument_id = $id;
            $favourites->type = $type;
            $favourites->save();
        }
        else {
            return back()->withErrors(['failed' => 'Товар уже є в обраних!']);
        }
        return back()->with('success', 'Успішно!');
    }

    public function canselChoose($id){
        DB::table('favourites')->delete($id);
        return redirect()->route('chosen');
    }

    public function cart(){

        $user_id = Auth::user()->id;

        $result = Cart::where('user_id', '=', $user_id)->get();

        $products_idx = $result->pluck('instrument_id');

        $products = $this->allTypes()->whereIn('type', $result->
        pluck('type'))->whereIn('id', $products_idx);

        $counts = $result->pluck('count')->toArray();

        $costs_with_discounts = array_map(function ($x, $y) {
            return $x * (1 - $y / 100);
        }, $products->pluck('cost')->toArray(), $products->pluck('discount')->toArray());


        $total_costs = array_map(function ($x, $y) {
            return $x * $y;
        }, $costs_with_discounts, $counts);
        return view('cart', ['products' => $products, 'total_costs' => $total_costs, 'cart_idx' => $result->pluck('id')]);
    }

    public function likes(){
        return redirect()->route('chosen')->withTitle('Вибране');
    }

    public function sendFeedback(Request $request){
        $new_feedback = new Feedback;
        $new_feedback->message = $request->input('message');
        $new_feedback->user_id = Auth::user()->id;
        $new_feedback->save();
        return redirect()->route('feedback');
    }

    public function orders(){
        $user_id = Auth::user()->id;
        $result = DB::table('orders')->where('user_id', '=', $user_id);
        $products = $this->allTypes()->whereIn('id', $result->pluck('instrument_id'))->whereIn('type', $result->pluck('type'));
        $counts = $result->pluck('count');
        $total_costs = array_map(function ($x, $y, $z) {
            return $x * (1 - $z / 100) * $y;
        }, $products->pluck('cost')->toArray(), $counts->toArray(), $products->pluck('discount')->toArray());
        return view('my-account-orders', ['data' => $products, 'counts' => $counts, 'costs' => $total_costs]);
    }

    public function addToCart($type, $id){
        $user_id = Auth::user()->id;
        $result = Cart::where('instrument_id', '=', $id)->where('user_id', '=', $user_id)->first();
        if ($result == null) {
            $new_order = new Cart;
            $new_order->instrument_id = $id;
            $new_order->user_id = $user_id;
            $new_order->type = $this->allTypes()->where('id', '=', $id)->pluck('type')[0];
            $new_order->count = 1;
            $new_order->cost = $this->allTypes()->where('id', '=', $id)->pluck('cost')[0];
            $new_order->save();
        }
        return redirect()->back();
    }

    public function removeFromCart($id){
        $cart = new Cart;
        $cart->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function order(Request $request){
        //if (!isset($request->route()->getAction()['products']))
        //    return back();
        $result = Cart::all()->where('user_id', '=', Auth::user()->id);
        $products = $this->allTypes()->whereIn('type', $result->pluck('type'))->whereIn('id', $result->pluck('instrument_id'));
        $counts = $result->pluck('count');
        $total_costs = array_map(function ($x, $y, $z) {
            return $x * (1 - $z / 100) * $y;
        }, $products->pluck('cost')->toArray(), $counts->toArray(), $products->pluck('discount')->toArray());
        if ($result->count() == 0) {
            return back();
        }
        return view('order', ['data' => $products, 'counts' => $counts, 'costs' => $total_costs])->withTitle('Замовлення');
    }

    public function makeOrder(Request $request){
        $user_id = Auth::user()->id;
        $result = DB::table('carts')->where('user_id', '=', $user_id)->get();
        $products_idx = $result->pluck('instrument_id');
        $counts = $result->pluck('count');
        $types = $result->pluck('type');
        $i = 0;
        foreach ($products_idx as $idx){
            $new_order = new Order;
            $new_order->first_name = $request->input('name');
            $new_order->user_id = $user_id;
            $new_order->instrument_id = $idx;
            $new_order->count = $counts[$i];
            $new_order->type = $types[$i];
            $new_order->last_name = $request->input('surname');
            $new_order->email = $request->input('email');
            $new_order->phone_number = $request->input('phone');
            $new_order->address = $request->input('address');
            $new_order->payment_method = $request->input('buy');
            $new_order->delivery_method = $request->input('cour');
            $new_order->post_index = $request->input('postindex');
            $new_order->save();
            $i++;
        }
        DB::table('carts')->where('user_id', '=', $user_id)->delete();
        return redirect()->route('cabinet');
    }
}
