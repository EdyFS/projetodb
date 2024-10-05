<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $fillable = ['nomeMotorista','cpf','telefone','email','cidade']; //só o que for manipulável
    /*protected $fillable = ['cpf'];
    protected $fillable = ['telefone'];
    protected $fillable = ['email'];
    protected $fillable = ['cidade'];*/
}
