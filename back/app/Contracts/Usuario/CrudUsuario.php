<?php

namespace App\Contracts\Usuario;

use App\DTO\User\CreateUserDTO;
use App\Models\Repositories\Usuarios;
use Illuminate\Http\JsonResponse;

interface CrudUsuario {
    public function cadastrar(CreateUserDTO $dto): Usuarios;
    public function atualizar(): JsonResponse;
    public function deletar(): JsonResponse;
    public function findById(int $id): Usuarios;
}