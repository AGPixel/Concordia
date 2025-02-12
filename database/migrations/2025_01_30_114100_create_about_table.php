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

            $table->text('about_title_1_eng')->nullable(true);
            $table->text('about_title_2_eng')->nullable(true);
            $table->text('about_service_title_eng')->nullable(true);
            $table->text('about_service_1_eng')->nullable(true);
            $table->text('about_service_2_eng')->nullable(true);
            $table->text('about_service_3_eng')->nullable(true);
            $table->text('about_service_4_eng')->nullable(true);
            $table->text('about_service_5_eng')->nullable(true);
            $table->text('about_service_6_eng')->nullable(true);
            $table->text('about_experience_title_eng')->nullable(true);
            $table->text('about_experience_title_1_eng')->nullable(true);
            $table->text('about_experience_description_1_eng')->nullable(true);
            $table->text('about_experience_title_2_eng')->nullable(true);
            $table->text('about_experience_description_2_eng')->nullable(true);
            $table->text('about_experience_title_3_eng')->nullable(true);
            $table->text('about_experience_description_3_eng')->nullable(true);
            $table->text('about_experience_title_4_eng')->nullable(true);
            $table->text('about_experience_description_4_eng')->nullable(true);
            $table->text('about_brands_description_eng')->nullable(true);

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
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
