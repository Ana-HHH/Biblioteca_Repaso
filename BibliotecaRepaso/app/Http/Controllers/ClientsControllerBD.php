<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientValidator;
use DB;
use Carbon\Carbon;

class ClientsControllerBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec = DB::table('tb_clients') -> get();
        return view('client', compact('resultRec'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientValidator $request)
    {
        DB::table('tb_clients')->insert([
            'Name' => $request -> input('NombreCliente'),
            'Email' => $request -> input('EmailCliente'),
            'INE' => $request -> input('NoINE'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('client') ->with('validInsert', 'Recuerdo guardado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaID = DB::table('tb_clients')-> where('ID_Client', $id)->first();
        return view('clientUpdate', compact('consultaID'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientValidator $request, $id)
    {
        DB::table('tb_clients')->where('ID_Client', $id)->update([
            'Name' => $request -> input('NombreCliente'),
            'Email' => $request -> input('EmailCliente'),
            'INE' => $request -> input('NoINE'),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('client') ->with('validUpdate', 'Recuerdo guardado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_clients')->where('ID_Client', $id)->delete();
        return redirect('client') ->with('validDelete', 'Recuerdo eliminado');

    }
}
