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
        Schema::create('proyectos', function(Blueprint $table){
            $table->id();
            $table->string('name')->unique();
            $table->date('fecha_inicio');
            $table->string('estado');
            $table->timestamps();
            $table->string('responsable');
            $table->decimal('monto', 15,2);
            $table->unsignedBigInteger('created_by');
            $table->boolean('activo')->default(false);

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
