<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciclo;
use App\Alumno;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ciclos = Ciclo::all();
        $alumnos = Alumno::all();
        return view('home2', compact('ciclos','alumnos'));
       
    }
}
