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
        Schema::create('det_m_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nik', 16);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number', 15);
            $table->string('photo');
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->timestamps();

            $table->index('id');
            $table->index('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_m_users');
    }
};
