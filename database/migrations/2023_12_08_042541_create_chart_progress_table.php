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
        Schema::create('chart_progress', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('row_number');
            $table->integer('column_number');
            $table->boolean('is_checked')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chart_progress');
    }
};
