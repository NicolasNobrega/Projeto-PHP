<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', // A coluna 'role' determina o tipo de usuário
    ];

    // Método para verificar se o usuário é síndico
    public function isSindico()
    {
        return $this->role === 'sindico'; // Verifica se o papel do usuário é 'sindico'
    }

    // Método para verificar se o usuário é morador
    public function isMorador()
    {
        return $this->role === 'morador'; // Verifica se o papel do usuário é 'morador'
    }
}
