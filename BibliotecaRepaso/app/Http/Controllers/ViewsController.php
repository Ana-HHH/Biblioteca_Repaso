<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function gotoForm() {
        return view('form');
    }
    public function gotoHome() {
        return view('index');
    }

    public function gotoClientNew() {
        return view('clientnew');
    }

    public function gotoRecuerdos() {
        return view('recuerdos');
    }

}
