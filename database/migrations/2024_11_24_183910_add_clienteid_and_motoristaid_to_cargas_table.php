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
        Schema::table('cargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                    ->references('id')
                    ->on("clientes")
                    ->onDelete("restrict");
            $table->unsignedBigInteger('motorista_id');
            $table->foreign('motorista_id')
                    ->references('id')
                    ->on("motoristas")
                    ->onDelete("restrict");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cargas', function (Blueprint $table) {
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                    ->references('id')
                    ->on("clientes")
                    ->onDelete("restrict");
            $table->unsignedBigInteger('motorista_id');
            $table->foreign('motorista_id')
                    ->references('id')
                    ->on("motoristas")
                    ->onDelete("restrict");
        });
    }
};
