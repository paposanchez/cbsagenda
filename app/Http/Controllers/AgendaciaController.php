<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciafono;

class AgendaciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre = $request->get('nombre');
        $comuna = $request->get('comuna');
       
        //$cuerpo = Cuerpo::paginate(5);
        $cuerpos = Cuerpo::orderBy('nombre', 'DESC')
            ->nombre($nombre)
            ->comuna($comuna)
            ->paginate(5);
 return view("agenda.index",compact('cuerpos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cia = \App\Compania::find($id);
        return view('cia.fono',compact('id','cia'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
   

        $usuario= new Ciafono;
        $usuario->numero=$request->get('numero');
        $usuario->cia_id=$request->get('cia_id');
        $usuario->estado=$request->get('estado');
      

       $usuario->save();

        return redirect('cia');
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
        //
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
}
