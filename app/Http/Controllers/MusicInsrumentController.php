<?php

namespace App\Http\Controllers;

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
    public function search(Request $request){
        return view('search', MusicInstruments::all()->where('name', 'like', '%'. $request->input('search') . '%'));
    }

    public function getByName(Request $request){
        return view('goods', ['data' => DB::table($request->route()->getAction()['name'])->get()])->withTitle($request->route()->getAction()['title']);
    }

    public function allTypes(){
        return DB::table('guitars')->get()->
        merge(DB::table('keyboards')->get())->
        merge(DB::table('winds')->get())->
        merge(DB::table('bows')->get())->
        merge(DB::table('percussions')->get())->
        merge(DB::table('accessories')->get());
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

    public function register(){
        try {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirm' => 'required'
            ]);
        } catch (ValidationException $e) {

        }

        $user = User::create(request(['name', 'email', 'password']));

        Auth::login($user);

        return redirect()->to('/games');
    }

    public function sales(){
        $result = $this->allTypes()->where('discount', '>', 0);
        return view('goods', ['data' => $result])->withTitle('Знижки');
    }

    public function brands(){
        $result = $this->allTypes();
        return view('goods', ['data' => $result])->withTitle('Знижки');
    }

    public function chosen(){
        $result = $this->allTypes();
        return view('my-account-chosen', ['data' => $result])->withTitle('Обране');
    }

    public function canselChoose(){

    }
}
