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
        Schema::create('portifolio_geral', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('title_eng')->nullable(true);
            $table->text('description_eng')->nullable(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portifolio_geral');
    }
};
