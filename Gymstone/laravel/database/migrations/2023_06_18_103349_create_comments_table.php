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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->foreign('training_plan_id')->references('id')->on('training_plans')->constrained()->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
            $table->integer('rating');
            $table->string('comment_descr');
            $table->timestamps();

            // compound key
            $table->unique(['training_plan_id', 'user_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
