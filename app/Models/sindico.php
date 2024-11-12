<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sindico extends Model
{
    protected $table = 'sindico';

    protected $fillable = ['nome', 'email', 'senha', 'foto_perfil'];

    public $timestamps = false;

    public function checkPassword($password)
    {
        return password_verify($password, $this->senha);
    }
}
