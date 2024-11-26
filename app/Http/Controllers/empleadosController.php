<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;

class empleadosController extends Controller
{
  public function index()
  {
    $user = Auth::user();
    $empleados = Empleado::all();

    return view('empleados', [
      "empleados" => $empleados,
      "user" => $user,
    ]);
  }
}
