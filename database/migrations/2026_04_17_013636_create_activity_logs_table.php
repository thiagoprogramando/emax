<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('orders_activity_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('contract_order_id')->constrained()->onDelete('cascade');
            $table->enum('status_from', ['open', 'in_progress', 'review', 'done', 'canceled']);
            $table->enum('status_to', ['open', 'in_progress', 'review', 'done', 'canceled']);
            $table->dateTime('logged_at');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders_activity_logs');
    }
};
