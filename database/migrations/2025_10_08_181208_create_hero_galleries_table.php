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
        Schema::create('hero_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('image');
            $table->string('desktop_file')->nullable();
            $table->string('mobile_file')->nullable();
            $table->unsignedInteger('sort')->default(0);
            $table->boolean('status')->default(true)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_galleries');
    }
};
