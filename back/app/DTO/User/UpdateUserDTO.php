<?php

namespace App\DTO\User;

use App\Contracts\DTO\DtoBase;

final class UpdateUserDTO extends DtoBase
{
    protected int $id;
    protected string $nome;
    protected string $senha;    
}


