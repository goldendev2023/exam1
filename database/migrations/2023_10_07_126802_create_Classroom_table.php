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
        Schema::create('Classroom', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('A1');
            $table->string('A2');
            $table->string('B1');
            $table->string('B2');
            $table->string('C1');
            $table->string('C3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Classroom');
    }
};
