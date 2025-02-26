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
        Schema::create('testimonial', function (Blueprint $table) {
            $table->id();
            $table->text('meta_tags_title')->nullable(true);
            $table->text('meta_tags_description')->nullable(true);
            $table->text('meta_tags_keywords')->nullable(true);
            $table->text('num')->nullable(true);
            $table->text('name')->nullable(true);
            $table->text('company')->nullable(true);
            $table->text('description')->nullable(true);
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
        Schema::dropIfExists('testimonial');
    }
};
