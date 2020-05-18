<?php

namespace App\Http\Controllers;

use App\MusicInstruments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicInsrumentController extends Controller
{
    public function search(Request $request){
        return view('search', MusicInstruments::all()->where('name', 'like', '%'. $request->input('search') . '%'));
    }

    public function getByName(Request $request){
        return view('goods', ['data' => DB::table($request->route()->getAction()['name'])->get()])->withTitle($request->route()->getAction()['title']);
    }

    public function news(){
        DB::table('guitars')->get()->join('');
        return view('goods')
    }
}
