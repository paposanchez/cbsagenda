<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compania;
use App\Cuerpo;
use App\comuna;
use App\Ciafono;
use DB; 

class CompaniaController extends Controller
{
    public function index()
    {
$compania=Compania::all();
//dd($compania);
    	 
 return view("cia.index",compact('compania'));

 

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

    public function fono($id){
        $cia = \App\Compania::find($id);
        return view('cia.fono',compact('id','cia'));
    }

    public function show($id){

        $cia = \App\Compania::find($id);
          $agenda = DB::table('agendacia')->where('cia_id', '=', $id)->get();  
          
        
       return view("cia.show",compact('cia','agenda'));
    }

    public function fonostore(Request $request)
    {
        Ciafono::create($request->all());
        return redirect('cia');
    }

   public function crearcia ($id)
   {
    $comuna=comuna::all();
    $cuerpo=Cuerpo::all();
    $cb = \App\Cuerpo::find($id);
    return view("cia.crear2",compact('cb','comuna','cuerpo'));
    }
   
       
    
}
