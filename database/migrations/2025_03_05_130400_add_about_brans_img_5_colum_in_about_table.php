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
            $table->text('about_brands_img_5')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about', function($table) {
            $table->dropColumn('about_brands_img_5');
        });
    }
};
