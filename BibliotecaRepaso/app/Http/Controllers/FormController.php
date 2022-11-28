<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormValidator;
use App\Http\Requests\ClientNewValidator;
use App\Http\Requests\RecuerdoValidator;

class FormController extends Controller
{
    public function processForm(FormValidator $req){
        return redirect('/form')->with('message', 'success');
    }

    public function processNewClient(ClientNewValidator $req) {
        return redirect('/clientnew')->with('message', 'success');
    }

    public function processNewRecuerdo(RecuerdoValidator $req) {
        return redirect('/recuerdos')->with('message', 'success');
    }

}
