<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Guitar;
use App\Keyboard;
use App\MusicInstruments;
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
        return view('goods', ['data' => $this->allTypes()->where('name', 'LIKE', '%'. $request->input('search') . '%')])->withTitle('Пошук');
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
        $favourites = DB::table('favourites')->whereUserId(Auth::user()->id);
        return view('my-account-chosen', ['data' => $favourites])->withTitle('Обране');
    }

    public function canselChoose($id){
        DB::table('favourites')->delete($id);
        return redirect()->route('chosen');
    }

    public function cart(){
        return view('cart');
    }

    public function likes(){
        return view('goods')->withTitle('Вибране');
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
        $result = DB::table('orders')->where('user_id', '=', $user_id)->get(['instrument_id', 'type']);
        return view('my-account-orders', ['data' => $this->allTypes()->where('id', '=', $result->get('instrument_id'))->where('type', '=', $result->get('type'))]);
    }
}
