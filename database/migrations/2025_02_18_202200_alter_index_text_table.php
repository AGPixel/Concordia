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
            $table->text('service_img_1')->nullable(true);
            $table->text('service_img_2')->nullable(true);
            $table->text('service_img_3')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index_text', function($table) {
            $table->dropColumn('service_img_1');
            $table->dropColumn('service_img_2');
            $table->dropColumn('service_img_3');
        });
    }
};
