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
        Schema::create('notaFiscal', function(Blueprint $table){
            $table->increments('idNota');
            $table->string('emissor', 150);
            $table->dateTime('data');

            $table->index('data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('notaFiscal');
    }
};
