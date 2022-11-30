<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function gotoBook() {
        return view('book');
    }
    public function gotoHome() {
        return view('index');
    }

    public function gotoClient() {
        return view('client');
    }

}
