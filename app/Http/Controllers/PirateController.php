<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class PirateController extends Controller
{
    public function index()
    {
        return view('pirates.index');
    }

    public function name($newPirateName)
    {
        return view('pirates.name')->with(['title' => $newPirateName]);
    }

    public function error()
    {
        return view('pirates.errors');
    }
}