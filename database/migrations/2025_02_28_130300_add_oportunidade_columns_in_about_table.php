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
            $table->text('oportunidade_title')->nullable(true);
            $table->text('oportunidade_name_1')->nullable(true);
            $table->text('oportunidade_work_1')->nullable(true);
            $table->text('oportunidade_img_1')->nullable(true);
            $table->text('oportunidade_url_1')->nullable(true);
            
            $table->text('oportunidade_name_2')->nullable(true);
            $table->text('oportunidade_work_2')->nullable(true);
            $table->text('oportunidade_img_2')->nullable(true);
            $table->text('oportunidade_url_2')->nullable(true);
            
            $table->text('oportunidade_name_3')->nullable(true);
            $table->text('oportunidade_work_3')->nullable(true);
            $table->text('oportunidade_img_3')->nullable(true);
            $table->text('oportunidade_url_3')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about', function($table) {
            $table->dropColumn('oportunidade_title')->nullable(true);

            $table->dropColumn('oportunidade_name_1')->nullable(true);
            $table->dropColumn('oportunidade_work_1')->nullable(true);
            $table->dropColumn('oportunidade_img_1')->nullable(true);
            $table->dropColumn('oportunidade_url_1')->nullable(true);
            
            $table->dropColumn('oportunidade_name_2')->nullable(true);
            $table->dropColumn('oportunidade_work_2')->nullable(true);
            $table->dropColumn('oportunidade_img_2')->nullable(true);
            $table->dropColumn('oportunidade_url_2')->nullable(true);
            
            $table->dropColumn('oportunidade_name_3')->nullable(true);
            $table->dropColumn('oportunidade_work_3')->nullable(true);
            $table->dropColumn('oportunidade_img_3')->nullable(true);
            $table->dropColumn('oportunidade_url_3')->nullable(true);
        });
    }
};
