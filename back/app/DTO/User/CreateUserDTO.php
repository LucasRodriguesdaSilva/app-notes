<?php

namespace App\DTO\User;

use App\Contracts\DTO\DtoBase;
use App\Contracts\DTO\ValidarDadosDTO;
use Illuminate\Support\Facades\Validator;

final class CreateUserDTO extends DtoBase implements ValidarDadosDTO
{
    protected string $nome;
    protected string $email;
    protected string $senha;

    public function validar()
    {        
        $validador = Validator::make($this->jsonSerialize(),[
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'senha' => 'required|string|min:8,max:255'
        ]);

        return $validador;
    }
}


