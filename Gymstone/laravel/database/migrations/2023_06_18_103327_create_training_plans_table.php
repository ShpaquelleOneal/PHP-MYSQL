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
        Schema::create('training_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name');
            $table->string('plan_type');
            $table->string('duration');
            $table->foreignId('exercises_id')->constrained()->references('id')->on('exercises');
            $table->timestamps();

            // compound key
            $table->unique(['id','exercises_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_plans');
    }
};
