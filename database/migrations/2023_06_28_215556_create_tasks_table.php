<?php

use Illuminate\Database\Migrations\Migration;


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title', 80);
            $table->text('description',);
            $table->enum('state', ['Por hacer', 'En progreso', 'finalizada']);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
