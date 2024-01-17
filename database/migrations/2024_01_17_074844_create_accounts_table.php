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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('accountID')->autoIncrement();
            $table->integer('accountType')->nullable(false);
            $table->string('studentNumber')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('lastName')->nullable(false);
            $table->string('firstName')->nullable(false);
            $table->string('middleName');
            $table->string('level')->nullable(false);
            $table->date('birthDate')->nullable(false);
            $table->string('guardian')->nullable(false);
            $table->string('contactNumber')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
