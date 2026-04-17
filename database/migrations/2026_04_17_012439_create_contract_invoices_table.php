<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void {
        Schema::create('contract_invoices', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('contract_id')->constrained()->onDelete('cascade');
            $table->integer('serie');
            $table->decimal('payment_value', 15, 2)->default(0);
            $table->decimal('payment_credit_applied', 15, 2)->default(0);
            $table->date('payment_date_due');
            $table->date('payment_date_paid')->nullable();
            $table->enum('payment_method', ['cash', 'bank_transfer', 'credit_card', 'debit_card', 'pix', 'default'])->default('default');
            $table->enum('payment_status', ['pending', 'awaiting_payment', 'negotiating', 'canceled', 'paid', 'overdue'])->default('pending');
            $table->string('payment_url')->nullable();
            $table->string('payment_payload')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void {
        Schema::dropIfExists('contract_invoices');
    }
};
