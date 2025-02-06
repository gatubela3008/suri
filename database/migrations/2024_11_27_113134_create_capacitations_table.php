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

            $table->string('capacitation_name');
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->integer('price');
            $table->integer('registration')->default(15000);
            $table->integer('parts')->default(2);
            $table->integer('weeks_duration');
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
