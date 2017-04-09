<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex()
    {
        return view('myapp.pages.index');
    }

    public function getPost()
    {
        return view('myapp.pages.post_create');
    }
}
