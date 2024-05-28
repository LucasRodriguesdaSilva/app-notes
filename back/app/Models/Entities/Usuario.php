<?php

namespace App\Models\Entities;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Interfaces\Usuario\CrudUsuario;
use Illuminate\Http\JsonResponse;

class Usuario
{
    use HasFactory;

    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct() 
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function setNome(String $nome)
    {
        $this->nome = $nome;
    }

    public function setEmail(String $email)
    {
        $this->email = $email;       
    } 

    public function setSenha(String $senha)
    {
        $this->senha = $senha;
    } 
}
