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
        Schema::create('det_t_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('t_order_id');
            $table->uuid('m_service_id');
            $table->decimal('weight')->nullable();
            $table->integer('quantity')->nullable();
            $table->decimal('total_price');
            $table->decimal('discount');
            $table->decimal('final_price');
            $table->text('notes');
            $table->timestamps();
            
            $table->index('id');
            $table->index('t_order_id');
            $table->index('m_service_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('det_t_orders');
    }
};
