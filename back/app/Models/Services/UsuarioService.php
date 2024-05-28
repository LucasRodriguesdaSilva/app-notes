<?php 

namespace App\Models\Services;

use App\Contracts\Usuario\CrudUsuario;
use App\DTO\User\CreateUserDTO;
use App\DTO\User\UserDTO;
use App\Http\Controllers\Usuario;
use App\Models\Entities\Usuario as EntitiesUsuario;
use App\Models\Repositories\Usuarios;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use InvalidArgumentException;

class UsuarioService implements CrudUsuario
{
    public function findById(int $id): EntitiesUsuario
    {
        $user =  Usuarios::find($id);
        return new EntitiesUsuario(UserDTO::create([
            'id' => $user->id,
            'nome' => $user->nome,
            'email' => $user->email,
            'senha' => $user->senha,
        ]));
    }

    public function cadastrar(CreateUserDTO $user): Usuarios
    {
        $validador = $user->validar();
    
        if($validador->fails())
            throw new InvalidArgumentException($validador->errors());
            
        return Usuarios::create($user->jsonSerialize());
    }

    public function atualizar(): JsonResponse
    {
        return Response()->json(['success']);
    }

    public function deletar(): JsonResponse
    {
        return Response()->json(['success']);
    }
}
