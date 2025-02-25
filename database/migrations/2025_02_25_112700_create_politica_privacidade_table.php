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
        Schema::create('privacy_politics', function (Blueprint $table) {
            $table->id();
            $table->text('meta_tags_title')->nullable(true);
            $table->text('meta_tags_description')->nullable(true);
            $table->text('meta_tags_keywords')->nullable(true);
            $table->text('title')->nullable(true);
            $table->text('title_eng')->nullable(true);
            $table->text('content')->nullable(true);
            $table->text('content_eng')->nullable(true);

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_politics');
    }
};
