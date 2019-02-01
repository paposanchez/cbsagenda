<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Compania;
Use App\Cuerpo; 
use App\claves;
use App\Asig_com;
Use DB;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $nombre = $request->get('nombre');
        $comuna = $request->get('comuna');
       
        //$cuerpo = Cuerpo::paginate(5);
        $cuerpos = Cuerpo::orderBy('nombre', 'DESC')
            ->nombre($nombre)
            ->comuna($comuna)
            ->paginate(10);
 return view("agenda.index",compact('cuerpos'));
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
        $cuerpo = DB::table('cuerpos')->where('id', '=', $id)->first(); 
        $compania=DB::table('companias')->where('cuerpo_id','=',$id)->get();
        $fono=DB::table('agendacb')->where('cuerpo_id','=',$id)->get();
       return view("agenda.show",compact('cuerpo','compania','fono')); 
        
      // $cuerpos=Cuerpo::first();
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

     public function clave()
    {
        
       $claves= Claves::all();
       
        
 return view("agenda.clave",compact('claves'));
       
        
       
    }


     public function comunas()
    {
        $users = DB::table('asig_comuna')
            ->join('cuerpos', 'asig_comuna.id_cuerpo', '=', 'cuerpos.id')
            ->join('comuna', 'asig_comuna.comuna_id', '=', 'comuna.comuna_id')
            ->select('comuna.comuna_nombre', 'cuerpos.nombre')
            ->get();

     
          

       return view("agenda.comunas",compact('users'));

    }
}
