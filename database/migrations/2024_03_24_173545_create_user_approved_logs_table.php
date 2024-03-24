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
        Schema::create('user_approved_logs', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->integer('accountID')->nullable(false);
            $table->integer('approver')->nullable(false);
            $table->string('isActivated')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_approved_logs');
    }
};
