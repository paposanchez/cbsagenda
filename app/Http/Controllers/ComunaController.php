<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comuna;
use App\Provincia;

class ComunaController extends Controller
{
    
    public function index()
    {
	

   // $comuna=comuna::with('provincia')->find(1101);
    $proveedor = Provincia::with('comuna')->get();
//dd($proveedor->comuna);
	
 
return view("comuna.index",compact('proveedor'));
    }


    public function create()
    {
    	$comuna=comuna::all();
    	$cuerpo=Cuerpo::all();
       return view("cia.crear",compact('comuna','cuerpo'));
    }

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        compania::create($request->all());
        return redirect('cia');
    }

    public function edit($id)
    {       $comuna2 = comuna::lists('name_nombre', 'comuna_id');
            $comuna=comuna::pluck('comuna_nombre','comuna_id')->toArray();
            $cia = \App\Compania::find($id);
            return view('cia.edit',compact('id','comuna','cia'));
    }

 

    public function show($id){

        $cia = \App\Compania::find($id);
        $agenda = DB::table('agendacia')->where('cia_id', '=', $id)->get();  
          
        
       return view("cia.show",compact('cia','agenda'));
    }
}
