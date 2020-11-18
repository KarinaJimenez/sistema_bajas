<?php

namespace App\Http\Controllers;

use App\Ciclo;
use App\Carrera;
use App\Http\Requests\CarrerasRequest;
use Alert;
use Illuminate\Http\Request;

class CarrerasController extends Controller
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
    
    public function index()
    {
        $ciclos = Ciclo::all();
        $carreras = Carrera::all(); 
        return view('carreras.index', compact('ciclos','carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $carreras = Carrera::all();
        $ciclos = Ciclo::all();
        return view('carreras.create', compact('carreras', 'ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarrerasRequest $request)
    {
        Carrera::create($request->all());
        Alert::success('carrera creada exitosamente');
        return redirect('carreras');
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
        $carrera = Carrera::findOrFail($id);
        $ciclos = Ciclo::all();
        return view('carreras.edit', compact('carrera', 'ciclos'));
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
        Carrera::findOrFail($id)->update($request->all());
        Alert::success('Carrera editada exitosamente');
        return redirect('carreras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carrera::findOrFail($id)->delete();
        Alert::success('carrera eliminada exitosamente');
        return redirect('carreras');
    }
}
