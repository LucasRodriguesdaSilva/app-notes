<?php

namespace App\Http\Controllers;

use App\DTO\User\CreateUserDTO;
use App\DTO\User\UpdateUserDTO;
use App\DTO\User\UserDTO;
use App\Models\Entities\Usuario as EntitiesUsuario;
use App\Models\Services\UsuarioService;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class Usuario extends Controller
{

    public function findById($id)
    {
        try {
            $user =  (new UsuarioService)->findById($id);
            
            return Response()->json($user);
        } catch (\Throwable $th) {
            return Response()->json(['error'=>$th->getMessage()],400);
        }
    }
    
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
