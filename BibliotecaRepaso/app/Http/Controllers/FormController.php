<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BooksValidator;
use App\Http\Requests\ClientValidator;
use App\Http\Requests\RecuerdoValidator;

class FormController extends Controller
{
    public function processBooks(BooksValidator $req){
        return redirect('book.create')->with('message', 'success');
    }

    public function processClient(ClientValidator $req) {
        return redirect('/client')->with('message', 'success');
    }

}
