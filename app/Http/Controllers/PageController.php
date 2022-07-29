<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data = \App\Models\Post::latest()->paginate();
        return view('index', compact('data'));
    }
}
