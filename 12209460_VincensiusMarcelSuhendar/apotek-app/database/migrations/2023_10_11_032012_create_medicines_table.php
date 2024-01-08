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
        Schema::create('medicines', function (Blueprint $table){
            $table->id(); // prime ai
            $table->enum('type', ['tablet', 'sirup', 'kapsul']);
            $table->string('name');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps(); // creates 2 columns: created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('medicines');
    }
};
