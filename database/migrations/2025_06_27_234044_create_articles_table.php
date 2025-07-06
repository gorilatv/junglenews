<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');              // Título da matéria
            $table->string('slug')->unique();     // Slug para usar na URL
            $table->string('image')->nullable();  // Caminho da imagem
            $table->text('excerpt')->nullable();  // Resumo opcional
            $table->longText('content');          // Corpo da matéria
            $table->timestamps();                 // created_at e updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
