<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root(){
        session()->flash('info','this is a test!');
        return view('pages.root');
    }
}
