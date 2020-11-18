<?php

namespace App\Http\Controllers;
use App\Solicitude;
use App\Ciclo;
use App\Http\Requests\SolicitudRequest;
use App\User;
use App\statu;
use Alert;
use Illuminate\Http\Request;

class SolicitudController extends Controller
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
        $solicitud = solicitude::all();
        $ciclos = Ciclo::all();
        $usuarios = User::all();
        $status = statu::all();
        return view('solicitud.index', compact('solicitud', 'ciclos', 'usuarios', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitud = solicitude::all();
        $ciclos = Ciclo::all();
        $usuarios = User::all();
        $status = statu::all();
        return view('solicitud.create', compact('solicitud','ciclos', 'usuarios', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitudRequest $request)
    {
        Solicitude::create($request->all());
        Alert::success('Solicitud creada exitosamente');
        return redirect('solicitud');
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
        $usuarios = User::all();
        $status = statu::all();
        $solicitud = Solicitude::findOrFail($id);
        return view('solicitud.edit', compact('solicitud', 'ciclos', 'usuarios', 'status'));
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
        Solicitude::findOrFail($id)->update($request->all());
        Alert::success('Solicitud editada exitosamente');
        return redirect('solicitud');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Solicitude::findOrFail($id)->delete();
        Alert::success('Solicitud eliminada exitosamente');
        return redirect('solicitud');
    }
}
