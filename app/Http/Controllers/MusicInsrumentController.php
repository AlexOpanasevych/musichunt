<?php

namespace App\Http\Controllers;

use App\MusicInstruments;
use Illuminate\Http\Request;

class MusicInsrumentController extends Controller
{
    public function search(Request $request){
        return view('search', MusicInstruments::all()->where('name', 'like', '%'. $request->input('search') . '%'));
    }
}
