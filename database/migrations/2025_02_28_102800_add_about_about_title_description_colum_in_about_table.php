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
        Schema::table('about', function($table) {
            $table->text('about_about_title')->nullable(true);
            $table->text('about_about_title_eng')->nullable(true);
            $table->text('about_about_description')->nullable(true);
            $table->text('about_about_description_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about', function($table) {
            $table->dropColumn('about_about_title');
            $table->dropColumn('about_about_title_eng');
            $table->dropColumn('about_about_description');
            $table->dropColumn('about_about_description_eng');
        });
    }
};
