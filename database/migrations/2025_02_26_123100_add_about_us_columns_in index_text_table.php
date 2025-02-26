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
        Schema::table('index_text', function($table) {
            $table->text('about_us_title')->nullable(true);
            $table->text('about_us_title_eng')->nullable(true);
            $table->text('about_us_description')->nullable(true);
            $table->text('about_us_description_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index_text', function($table) {
            $table->dropColumn('about_us_title');
            $table->dropColumn('about_us_title_eng');
            $table->dropColumn('about_us_description');
            $table->dropColumn('about_us_description_eng');
        });
    }
};
