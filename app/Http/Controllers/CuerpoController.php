<?php

namespace App\Http\Controllers;
use App\Cuerpo;
use App\comuna;
use App\Asig_com;
use DB; 
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CuerpoController extends Controller
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
            ->paginate(4);
 return view("cuerpo.index",compact('cuerpos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $comuna = comuna::orderBy('comuna_nombre', 'ASC')->pluck('comuna_nombre', 'comuna_nombre');
      
       return view("cuerpo.crear",compact('comuna'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$request->validate([
    'nombre' => 'required|unique:cuerpos|max:255',
    'fundacion' => 'required',
    'direccion' => 'required',
    'comuna' => 'required',
]);

// storage

        if($request->file('file')){
            $path = Storage::disk('public')->put('image',$request->file('file'));
            $Cuerpo->fill(['file' => asset($path)])->save();
        }

        Cuerpo::create($request->all());
        return redirect('cuerpo');
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
            $comuna=DB::table('asig_comuna')->where('id_cuerpo','=',$id)->get();
          
       return view("cuerpo.show",compact('cuerpo','compania','fono','comuna'));

        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
            $comuna=comuna::all();
            $cuerpo = \App\Cuerpo::find($id);
        return view('cuerpo.edit',compact('cuerpo','id','comuna'));
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
        $cb= \App\Cuerpo::find($id);
        $cb->nombre=$request->get('nombre');
        $cb->fundacion=$request->get('fundacion');
        $cb->direccion=$request->get('direccion');
        $cb->comuna=$request->get('comuna');
        $cb->save();
        return redirect('cuerpo');
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
