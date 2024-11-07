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

            $table->string('name', 30);
            $table->text('sumary');
            $table->longText('decription');
            $table->unsignedTinyInteger('estimated_weeks');
            $table->decimal('price', 7, 0);
            $table->decimal('installments', 7, 0);
            $table->decimal('monthly', 7, 0);

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
