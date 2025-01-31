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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->text('about_title_1')->nullable(true);
            $table->text('about_title_2')->nullable(true);
            $table->text('about_img_1')->nullable(true);
            $table->text('about_img_2')->nullable(true);
            $table->text('about_img_3')->nullable(true);
            $table->text('about_img_4')->nullable(true);
            $table->text('about_service_title')->nullable(true);
            $table->text('about_service_1')->nullable(true);
            $table->text('about_service_img_1')->nullable(true);
            $table->text('about_service_2')->nullable(true);
            $table->text('about_service_img_2')->nullable(true);
            $table->text('about_service_3')->nullable(true);
            $table->text('about_service_img_3')->nullable(true);
            $table->text('about_service_4')->nullable(true);
            $table->text('about_service_img_4')->nullable(true);
            $table->text('about_service_5')->nullable(true);
            $table->text('about_service_img_5')->nullable(true);
            $table->text('about_service_6')->nullable(true);
            $table->text('about_service_img_6')->nullable(true);
            $table->text('about_experience_title')->nullable(true);
            $table->text('about_experience_title_1')->nullable(true);
            $table->text('about_experience_description_1')->nullable(true);
            $table->text('about_experience_data_1')->nullable(true);
            $table->text('about_experience_title_2')->nullable(true);
            $table->text('about_experience_description_2')->nullable(true);
            $table->text('about_experience_data_2')->nullable(true);
            $table->text('about_experience_title_3')->nullable(true);
            $table->text('about_experience_description_3')->nullable(true);
            $table->text('about_experience_data_3')->nullable(true);
            $table->text('about_experience_title_4')->nullable(true);
            $table->text('about_experience_description_4')->nullable(true);
            $table->text('about_experience_data_4')->nullable(true);
            $table->text('about_brands_title')->nullable(true);
            $table->text('about_brands_img_1')->nullable(true);
            $table->text('about_brands_img_2')->nullable(true);
            $table->text('about_brands_img_3')->nullable(true);
            $table->text('about_brands_img_4')->nullable(true);
            $table->text('about_brands_description')->nullable(true);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
