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
        Schema::create('superhero', function (Blueprint $table) {
            $table->id();
            $table->foreignId('universe_id')->constrained('universes');
            $table->foreignId('gender_id')->constrained('gerders');
            $table->string('name',100);
            $table->string('real_name',100);
            $table->string('picture',200)->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superhero');
    }
};
