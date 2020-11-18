<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Carrera;
use App\Ciclo;
use App\Solicitude;
use Alert;
use App\Http\Requests\AlumnosRequest;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

use function GuzzleHttp\Promise\all;

class AlumnosController extends Controller
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
        $alumnos = Alumno::all();
        $carreras = Carrera::all(); 
        $solicitud = Solicitude::all();
        return view('alumnos.index', compact('ciclos','alumnos','carreras','solicitud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciclos = Ciclo::all();
        $carreras = Carrera::all();
        $solicitud = Solicitude::all(); 
        $alumnos = Alumno::all();
        return view('alumnos.create', compact('ciclos','carreras', 'solicitud','alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnosRequest $request)
    {
        Alumno::create($request->all());
        Alert::success('Alumno creado exitosamente');
        return redirect('alumnos');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumnos.show',compact('alumno'));
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
        $carreras = Carrera::all();
        $solicitud = Solicitude::all(); 
        $alumno = Alumno::findOrFail($id);
       
        return view('alumnos.edit', compact('alumno', 'ciclos', 'carreras', 'solicitud'));

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
        if(!isset($request['Dominio'])){
            $request['Dominio'] = 0;
        }
        
        if(!isset($request['Moodle'])){
            $request['Moodle'] = 0;
            
        }
        //dd($request->all());

        Alumno::findOrFail($id)->update($request->all());
        Alert::success('Alumno editado exitosamente');
       // dd($request->all());
        return redirect('alumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::findOrFail($id)->delete();
        Alert::success('Alumno eliminado exitosamente');
         return redirect('alumnos');
    }
}