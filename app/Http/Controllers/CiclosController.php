<?php

namespace App\Http\Controllers;
use App\Ciclo;
use Alert;
use App\Http\Requests\CiclosRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class CiclosController extends Controller
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
        return view('ciclos.index', compact('ciclos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = Ciclo::all();
        return view('ciclos.crear', compact('ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CiclosRequest $request)
    {

        Ciclo::create($request->all());
        Alert::success('Ciclo creado exitosamente');
        return redirect('ciclos');
        
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
        $ciclos = Ciclo::all();
        $ciclos = Ciclo::findOrFail($id);
        return view('ciclos.edit', compact('ciclos'));
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
        Ciclo::findOrFail($id)->update($request->all());
        Alert::success('Ciclo editado exitosamente');
        return redirect('ciclos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ciclo::findOrFail($id)->delete();
        Alert::warning('Ciclo Eliminado exitosamente');
        return redirect('ciclos');
    }
}
