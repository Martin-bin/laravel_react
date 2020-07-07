<?php

namespace App\Http\Controllers;

use App\segunda;
use Illuminate\Http\Request;

class SegundaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['indiceSegundas']=segunda::paginate(5);
        return view('segundas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('segundas.create');
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
        //$datosSegundas=request()->all();
       $datosSegundas=request()->except('_token'); 

       if ($request->hasFile('fecha')) {
           $datosSegundas['fecha']=$request->file('fecha')->store('uploads', 'public'); //almacenar imagen
       }
        Segunda::insert($datosSegundas);
        return response()->json($datosSegundas); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\segunda  $segunda
     * @return \Illuminate\Http\Response
     */
    public function show(segunda $segunda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\segunda  $segunda
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $v_segunda=Segunda::findOrFail($id);
        return view('segundas.edit',compact('v_segunda'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\segunda  $segunda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosSegundas=request()->except(['_token','_method']);
        Segunda::where('id','=', $id)->update($datosSegundas);

        $v_segunda=Segunda::findOrFail($id);
        return view('segundas.edit',compact('v_segunda'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\segunda  $segunda
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Segunda::destroy($id);
        return redirect('segundas');
    }
}
