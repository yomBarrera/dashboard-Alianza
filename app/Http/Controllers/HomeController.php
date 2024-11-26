<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Empleado;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{



  public function index()
  {
    $user = Auth::user();

    return view('home', [
      "user" => $user
    ]);
  }

  public function create(Request $request)
  {

    $validator = Validator::make($request->all(), [
      'nombre' => 'required|max:255',
      'apellido' => 'required',
      'identificacion' => 'required',
      'telefono' => 'required|digits:10',
      'ciudad' => 'required',
      'departamento' => 'required'
    ]);

    if ($validator->fails()) {
      $data = [
        'message' => 'Error en la validación de los datos',
        'errors' => $validator->errors(),
        'status' => 400
      ];
      return response()->json($data, 400);
    }
    // return dump($request);
    $empleado = Empleado::create([
      'nombre' => $request->nombre,
      'apellido' => $request->apellido,
      'identificacion' => $request->identificacion,
      'telefono' => $request->telefono,
      'ciudad' => $request->ciudad,
      'departamento' => $request->departamento,
    ]);

    if (!$empleado) {
      $data = [
        'message' => 'Error al crear el empleado',
        'status' => 500
      ];
      return response()->json($data, 500);
    }

    $data = [
      'empleado' => $empleado,
      'status' => 201
    ];

    return redirect('/empleados');
  }
}
