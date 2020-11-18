<?php

namespace App\Http\Controllers;


use App\Ciclo;
use App\Http\Requests\UsuariosRequest;
use Illuminate\Http\Request;
use Alert;
use App\User;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciclos = Ciclo::all();
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios', 'ciclos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = Ciclo::all();
        $usuarios = User::all();
        return view('usuarios.create', compact('usuarios', 'ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuariosRequest $request)
    {
        $request['password'] = bcrypt($request['password']);
        User::create($request->all());
        Alert::success('Usuario creado exitosamente');
        return redirect('usuarios');
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
        $usuarios = User::findOrFail($id);
        return view('usuarios.edit', compact('usuarios','ciclos'));
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
        $request['password'] = bcrypt($request['password']);
        User::findOrFail($id)->update($request->all());
        Alert::success('Usuario editado exitosamente');
        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        Alert::success('Usuario eliminado exitosamente');
        return redirect('usuarios');
    }
}
