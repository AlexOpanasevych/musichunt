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

    public function getByName($name){
        return view('container', ['data' => DB::table($name)->get()]);
    }
}
