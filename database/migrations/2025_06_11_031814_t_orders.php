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
        Schema::create('t_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('m_user_id');
            $table->uuid('m_customer_id');
            $table->string('invoice_number');
            $table->decimal('total_price');
            $table->decimal('discount');
            $table->decimal('final_price');
            $table->enum('status', ['ordered', 'pending', 'processed', 'delivered', 'done'])->default('ordered');
            $table->date('order_date');
            $table->date('due_date');
            $table->date('pickup_date');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->timestamps();
            
            $table->index('id');
            $table->index('m_user_id');
            $table->index('m_customer_id');
            $table->index('invoice_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_orders');
    }
};
