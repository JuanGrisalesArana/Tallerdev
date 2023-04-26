<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Illuminate\Support\Facades\Redirect;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
        {
            $this->middleware('auth');
        }
     
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $docente = Docente::orderBy('id','DESC')->paginate(10);
        
        return view('docente.index',compact('docente')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view ('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentes=new Docente;
        $docentes->documento_identidad=$request->get('documento_identidad');
        $docentes->nombre=$request->get('nombre');
        $docentes->apellido=$request->get('apellido');
        $docentes->email=$request->get('email');
        $docentes->telefono=$request->get('telefono');
        $docentes->contraseña=$request->get('contraseña');
        $docentes->rol=$request->get('rol');
        $docentes->save();
        return Redirect::to('docente');
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
        $docente=Docente::findOrFail($id);
        return view("docente.edit",["docente"=>$docente]);
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
        $docentes=Docente::findOrFail($id);
        $docentes->documento_identidad=$request->get('documento_identidad');
        $docentes->nombre=$request->get('nombre');
        $docentes->apellido=$request->get('apellido');
        $docentes->email=$request->get('email');
        $docentes->telefono=$request->get('telefono');
        $docentes->contraseña=$request->get('contraseña');
        $docentes->rol=$request->get('rol');
        $docentes->update();
        return Redirect::to('docente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docentes=Docente::findOrFail($id);
        $docentes->delete();
        return Redirect::to('docente');
    }
}



