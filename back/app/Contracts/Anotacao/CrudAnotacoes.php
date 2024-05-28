<?php

namespace App\Interfaces\Anotacao;

use Illuminate\Http\JsonResponse;

interface CrudAnotacao {
    public function buscar(): JsonResponse;
    public function cadastrar(): JsonResponse;
    public function atualizar(): JsonResponse;
    public function deletar(): JsonResponse;
}