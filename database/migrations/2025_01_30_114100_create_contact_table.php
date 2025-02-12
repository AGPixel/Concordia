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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->text('email1')->nullable(true);
            $table->text('email2')->nullable(true);
            $table->text('contact_form_title')->nullable(true);
            $table->text('business_hours1')->nullable(true);
            $table->text('business_hours2')->nullable(true);
            $table->text('business_hours3')->nullable(true);
            $table->text('address1')->nullable(true);
            $table->text('address2')->nullable(true);
            $table->text('address3')->nullable(true);
            $table->text('map_lat')->nullable(true);
            $table->text('map_len')->nullable(true);
            $table->text('footer_email')->nullable(true);
            $table->text('footer_call')->nullable(true);
            $table->text('footer_skype')->nullable(true);

            $table->text('contact_form_title_eng')->nullable(true);

            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
