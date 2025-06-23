<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\Usuario;

class UsuarioController extends Controller
{
     public function index(): JsonResponse
    {
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }
}
