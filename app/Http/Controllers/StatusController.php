<?php

namespace App\Http\Controllers;
use App\Ciclo;
use App\Http\Requests\StatusRequest;
Use App\statu;
use Illuminate\Http\Request;
use Alert;

class StatusController extends Controller
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
        $status = statu::all();
        return view('status.index', compact('ciclos', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = Ciclo::all();
        $status = statu::all();
        return view('status.create', compact('status', 'ciclos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatusRequest $request)
    {
        statu::create($request->all());
        Alert::success('status creado exitosamente');
        return redirect('status');
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
        $status = statu::findOrFail($id);
        $ciclos = Ciclo::all();
        return view('status.edit', compact('status','ciclos'));
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
        statu::findOrFail($id)->update($request->all());
        Alert::success('Status editada exitosamente');
        return redirect('status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        statu::findOrFail($id)->delete();
        Alert::success('Status eliminada exitosamente');
        return redirect('status');
    }
}
