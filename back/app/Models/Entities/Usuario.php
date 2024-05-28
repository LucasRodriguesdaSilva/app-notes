<?php

namespace App\Models\Entities;

use App\DTO\User\UserDTO;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario
{
    use HasFactory;

    private $id;
    private $nome;
    private $email;
    private $senha;

    public function __construct(UserDTO $user) 
    {
        $this->id = $user->get('id');
        $this->nome = $user->get('nome');
        $this->email = $user->get('email');
        $this->senha = $user->get('senha');
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
