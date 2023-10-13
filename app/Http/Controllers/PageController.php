<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {

        $movies = Movie::all();


        return view('welcome', compact('movies'));
    }

    public function detail($id)
    {

        $movieDET = Movie::where('id', '=', $id)->first();
        // $movies = Movie::findorfail($id);


        return view('movieDetail', compact('movieDET'));
    }

}