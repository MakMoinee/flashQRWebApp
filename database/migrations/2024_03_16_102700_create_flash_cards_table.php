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
        Schema::create('flash_cards', function (Blueprint $table) {
            $table->id('flashCardID')->autoIncrement();
            $table->string('flashCardName')->nullable(false);
            $table->integer('categoryID')->nullable(false);
            $table->string('imagePath')->nullable(true);
            $table->string('description')->nullable(false);
            $table->integer('accountID')->nullable(false);
            $table->string('createdBy')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flash_cards');
    }
};
