<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Motorista;
use App\Models\Carga;

class Entrega extends Model
{
    use HasFactory;

    protected $fillble = ['cliente_id', 'motorista_id', 'carga_id', 'data_entrega'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function motorista()
    {
        return $this->belongsTo(Motorista::class);
    }

    public function carga()
    {
        return $this->belongsTo(Carga::class);
    }
}
