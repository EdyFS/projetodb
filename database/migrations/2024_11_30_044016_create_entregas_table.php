<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');//para chave estrangeira
            $table->foreign('cliente_id')->references('id')->on("clientes")->onDelete("restrict");
            $table->unsignedBigInteger('motorista_id');//para chave estrangeira
            $table->foreign('motorista_id')->references('id')->on("motoristas")->onDelete("restrict");
            $table->unsignedBigInteger('carga_id');//para chave estrangeira
            $table->foreign('carga_id')->references('id')->on("cargas")->onDelete("restrict");
            $table->date('data_entrega');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entregas');
    }
};
