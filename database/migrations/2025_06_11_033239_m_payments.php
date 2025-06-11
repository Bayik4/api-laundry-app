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
        Schema::create('m_payments', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('t_order_id');
            $table->decimal('amount_paid');
            $table->string('proof_image');
            $table->enum('payment_method', ['cash', 'transfer']);
            $table->timestamp('paid_at');
            $table->timestamps();
            
            $table->index('id');
            $table->index('t_order_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
