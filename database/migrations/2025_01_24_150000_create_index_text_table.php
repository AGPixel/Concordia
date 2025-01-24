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
        Schema::create('index_text', function (Blueprint $table) {
            $table->id();
            $table->text('about_title')->nullable(true);
            $table->text('about_description')->nullable(true);
            $table->text('about_img')->nullable(true);
            $table->text('about_num_1')->nullable(true);
            $table->text('about_description_1')->nullable(true);
            $table->text('about_img_1')->nullable(true);
            $table->text('about_num_2')->nullable(true);
            $table->text('about_description_2')->nullable(true);
            $table->text('about_img_2')->nullable(true);
            $table->text('about_num_3')->nullable(true);
            $table->text('about_description_3')->nullable(true);
            $table->text('about_img_3')->nullable(true);
            $table->text('service_title')->nullable(true);
            $table->text('service_1_title')->nullable(true);
            $table->text('service_1_description')->nullable(true);
            $table->text('service_2_title')->nullable(true);
            $table->text('service_2_description')->nullable(true);
            $table->text('service_3_title')->nullable(true);
            $table->text('service_3_description')->nullable(true);
            $table->text('portifolio_title')->nullable(true);
            $table->text('frame_num_1')->nullable(true);
            $table->text('frame_legend_1')->nullable(true);
            $table->text('frame_description_1')->nullable(true);
            $table->text('frame_num_2')->nullable(true);
            $table->text('frame_legend_2')->nullable(true);
            $table->text('frame_description_2')->nullable(true);
            $table->text('testimonials_title')->nullable(true);
            $table->text('testimonials_description')->nullable(true);
            $table->text('testimonials_num_1')->nullable(true);
            $table->text('testimonials_description_1')->nullable(true);
            $table->text('testimonials_img_1')->nullable(true);
            $table->text('testimonials_company_1')->nullable(true);
            $table->text('testimonials_name_1')->nullable(true);
            $table->text('testimonials_num_2')->nullable(true);
            $table->text('testimonials_description_2')->nullable(true);
            $table->text('testimonials_img_2')->nullable(true);
            $table->text('testimonials_company_2')->nullable(true);
            $table->text('testimonials_name_2')->nullable(true);
            $table->text('employee_title')->nullable(true);
            $table->text('employee_name_1')->nullable(true);
            $table->text('employee_work_1')->nullable(true);
            $table->text('employee_url_facebook_1')->nullable(true);
            $table->text('employee_url_instagram_1')->nullable(true);
            $table->text('employee_url_twitter_1')->nullable(true);
            $table->text('employee_name_2')->nullable(true);
            $table->text('employee_work_2')->nullable(true);
            $table->text('employee_url_facebook_2')->nullable(true);
            $table->text('employee_url_instagram_2')->nullable(true);
            $table->text('employee_url_twitter_2')->nullable(true);
            $table->text('employee_name_3')->nullable(true);
            $table->text('employee_work_3')->nullable(true);
            $table->text('employee_url_facebook_3')->nullable(true);
            $table->text('employee_url_instagram_3')->nullable(true);
            $table->text('employee_url_twitter_3')->nullable(true);
            $table->text('works_title')->nullable(true);
            $table->text('works_title_1')->nullable(true);
            $table->text('works_img_1')->nullable(true);
            $table->text('works_date_1')->nullable(true);
            $table->text('works_description_1')->nullable(true);
            $table->text('works_title_2')->nullable(true);
            $table->text('works_img_2')->nullable(true);
            $table->text('works_date_2')->nullable(true);
            $table->text('works_description_2')->nullable(true);
            $table->text('works_title_3')->nullable(true);
            $table->text('works_img_3')->nullable(true);
            $table->text('works_date_3')->nullable(true);
            $table->text('works_description_3')->nullable(true);
            $table->text('final_title')->nullable(true);
            $table->text('sign_title')->nullable(true);
            $table->text('sign_description')->nullable(true);
            $table->text('sign_rolling')->nullable(true);
            $table->text('social_url_facebook')->nullable(true);
            $table->text('social_url_instagram')->nullable(true);
            $table->text('social_url_twitter')->nullable(true);
            $table->text('contact_telephone')->nullable(true);
            $table->text('contact_cellphone')->nullable(true);
            $table->text('contact_email')->nullable(true);
            $table->text('navigation_title_1')->nullable(true);
            $table->text('navigation_url_1')->nullable(true);
            $table->text('navigation_title_2')->nullable(true);
            $table->text('navigation_url_2')->nullable(true);
            $table->text('navigation_title_3')->nullable(true);
            $table->text('navigation_url_3')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('index_text');
    }
};
