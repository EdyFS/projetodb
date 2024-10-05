<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome_cliente','cpf','telefone','email','cidade']; //só o que for manipulável
}
