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
        Schema::create('handbag_gallery', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('username')->nullable();
            $table->text('text')->nullable();
            $table->unsignedTinyInteger('style')->default(0);
            $table->unsignedInteger('sort')->default(0);
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handbag_gallery');
    }
};
