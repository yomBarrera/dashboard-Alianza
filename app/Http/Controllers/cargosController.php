<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

class cargosController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $empleados = Empleado::all();

    return view('cargos', [
      "empleados" => $empleados,
      "user" => $user,
    ]);
  }
}
