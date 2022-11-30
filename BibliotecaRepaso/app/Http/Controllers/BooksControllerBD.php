<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookValidator;
use DB;
use Carbon\Carbon;


class BooksControllerBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec = DB::table('tb_books') -> get();
        return view('book', compact('resultRec'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookValidator $request)
    {

        DB::table('tb_books')->insert([
            'ISBN' => $request -> input('ISBN'),
            'Title' => $request -> input('titulo'),
            'Author' => $request -> input('autor'),
            'Pages' => $request -> input('paginas'),
            'Publisher' => $request -> input('editorial'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('book') ->with('validInsert', 'Recuerdo guardado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaID = DB::table('tb_books')-> where('ID_Book', $id)->first();
        return view('bookUpdate', compact('consultaID'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookValidator $request, $id)
    {
        DB::table('tb_books')->where('ID_Book', $id)->update([
            'ISBN' => $request -> input('ISBN'),
            'Title' => $request -> input('titulo'),
            'Author' => $request -> input('autor'),
            'Pages' => $request -> input('paginas'),
            'Publisher' => $request -> input('editorial'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('book') ->with('validUpdate', 'Recuerdo guardado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_books')->where('ID_Book', $id)->delete();
        return redirect('book') ->with('validDelete', 'Recuerdo eliminado');

    }
}
