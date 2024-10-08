<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;

    protected $fillble = ['cliente_id', 'nome', 'descricao', 'valor'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
