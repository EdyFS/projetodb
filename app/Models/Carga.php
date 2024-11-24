<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Motorista;

class Carga extends Model
{
    protected $fillable = ['nomeCarga','peso','tamanho','fragilidade', 'cliente_id', 'motorista_id']; //só o que for manipulável

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function motorista()
    {
        return $this->belongsTo(Motorista::class);
    }
}
