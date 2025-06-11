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
        Schema::create('m_services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('m_service_category_id');
            $table->integer('duration');
            $table->enum('duration_unit', ['days', 'hours']);
            $table->string('name');
            $table->decimal('price');
            $table->enum('service_type', ['express', 'regular']);
            $table->timestamps();
            
            $table->index('id');
            $table->index('m_service_category_id');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_services');
    }
};
