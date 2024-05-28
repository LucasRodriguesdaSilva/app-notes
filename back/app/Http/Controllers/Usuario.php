<?php

namespace App\Http\Controllers;

use App\DTO\User\CreateUserDTO;
use App\Models\Services\UsuarioService;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    
    public function cadastrar(Request $request): JsonResponse
    {
        try {
            $userDto = CreateUserDTO::create($request->all());              
            $user = (new UsuarioService)->cadastrar($userDto);
    
            return Response()->json($user,201);
        } catch (\Throwable $th) {
            return Response()->json(['error'=>$th->getMessage()],422);
        }
    }
}
