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
            $table->text('brands_img_7')->nullable(true);
            $table->text('brands_img_8')->nullable(true);
            $table->text('brands_img_9')->nullable(true);
            $table->text('brands_img_10')->nullable(true);
            $table->text('brands_img_11')->nullable(true);
            $table->text('brands_img_12')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index_text', function($table) {
            $table->dropColumn('brands_img_7');
            $table->dropColumn('brands_img_8');
            $table->dropColumn('brands_img_9');
            $table->dropColumn('brands_img_10');
            $table->dropColumn('brands_img_11');
            $table->dropColumn('brands_img_12');
        });
    }
};
