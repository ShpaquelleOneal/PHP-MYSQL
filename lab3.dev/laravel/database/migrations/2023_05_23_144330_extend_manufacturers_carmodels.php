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
        // Extend manufacturers table
        Schema::table('manufacturers', function(Blueprint $table) {
            $table->integer('founded')->nullable();
            $table->string('website', 255)->nullable();
        });
        Schema::table('carmodels', function(Blueprint $table) {
            $table->integer('production_started')->nullable();
            $table->decimal('min_price', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
