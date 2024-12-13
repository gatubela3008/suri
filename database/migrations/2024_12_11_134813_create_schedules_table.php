<?php

use App\DayOfWeek;
use App\Shift;
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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();

            $table->string('day_of_week'); 
            $table->string('shift');
            $table->integer('start_hour')->nullable();
            $table->integer('start_minute')->nullable();
            $table->integer('end_hour')->nullable();
            $table->integer('end_minute')->nullable();            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
