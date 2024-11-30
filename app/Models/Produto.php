<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Cliente;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'nome', 'descricao', 'valor'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
