<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{
    protected $fillable = ['nome','peso','tamanho','fragilidade']; //só o que for manipulável

}
