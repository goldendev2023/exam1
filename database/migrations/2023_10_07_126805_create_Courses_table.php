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
        Schema::create('Courses', function (Blueprint $table) {
            $table->id->primary();
            $table->string('name');
            $table->string('Programming');
            $table->string('Web design');
            $table->string('Web programming');
            $table->string('Back-end development');
            $table->string('Front-end development');
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Courses');
    }
};
