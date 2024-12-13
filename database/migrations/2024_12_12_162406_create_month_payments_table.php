<?php

use App\MonthOfYear;
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
        Schema::create('month_payments', function (Blueprint $table) {
            $table->id();

            $table->string('month_of_year');
            $table->integer('year');
            $table->integer('mount');
            $table->boolean('credit')->default(false);
            $table->date('payment_day');
            $table->text('observations')->nullable();

            $table->foreignId('inscription_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('month_payments');
    }
};
