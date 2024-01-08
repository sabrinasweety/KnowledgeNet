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
        Schema::create('orders', function (Blueprint $table) {
            // $table->id();
            // $table->string('name')->nullable();
            // $table->string('email', 30)->nullable();
            // $table->string('phone', 20)->nullable();
            // $table->double('amount')->nullable();
            // $table->text('address')->nullable();
            // $table->string('status', 10)->nullable();
            // $table->string('transaction_id')->nullable();
            // $table->string('currency', 20)->nullable();
            // $table->timestamps();
            $table->id();
            $table->foreignId('user_id')->constrained();
           
            $table->string('status')->default('pending');
            $table->double('total_price')->default(0.0);
            $table->string('payment_method')->default('cod');
            $table->string('address');
            $table->string('receiver_mobile');
            $table->string('receiver_name');
            $table->string('receiver_email')->nullable();
            $table->text('order_note')->nullable();
            $table->string('transaction_id')->unique();
            $table->string('payment_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
