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
        Schema::create('item', function(Blueprint $table){
            $table->integer('idItem');
            $table->integer('idNota');
            $table->string('produto');
            $table->decimal('valor', 15, 3);

            $table->index(['produto']);
            $table->primary(['idItem', 'idNota']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
