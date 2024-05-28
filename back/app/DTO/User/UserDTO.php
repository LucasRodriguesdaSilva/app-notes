<?php

namespace App\DTO\User;

use App\Contracts\DTO\DtoBase;

final class UserDTO extends DtoBase
{
    protected int $id;
    protected string $nome;
    protected string $senha;
    protected string $email;
}


