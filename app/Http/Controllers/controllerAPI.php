<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\preu;

class controllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return response()->json( preu::all() );
        $results = DB::select('select distinct nom_barri from preu');
        return response()->json( $results );
        
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = DB::select('select * from preu where id = :id', ['id' => 2]);
        return response()->json( $results );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $results = DB::select('select nom_barri, preu, any from preu where id = :id', ['id' => 2]);
        return response()->json( $results );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function putRent($id) {
    $m = preu::findOrFail( $id );
    $m->rented = true;
    $m->save();
    return response()->json( ['error' => false,
                          'msg' => 'La película se ha marcado como alquilada' ] );
}
}
