<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use URL;
class TestCtrl extends Controller
{
    //
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('Test.index');
        // return view('artists.index')->with('movie', $movie);
    }
}
