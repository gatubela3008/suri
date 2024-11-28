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
        Schema::create('capacitations', function (Blueprint $table) {
            $table->id();

            $table->string('name', 60);
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->integer('prize');
            $table->integer('registration');
            $table->boolean('two_parts')->default(true);
            $table->integer('weeks_duration');
            $table->integer('number_of_month');
            $table->integer('month_payment');
            $table->string('requirements')->nullable();

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitations');
    }
};
