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
            $table->text('pre_title_1')->nullable(true);
            $table->text('pre_title_1_eng')->nullable(true);
            $table->text('pre_title_2')->nullable(true);
            $table->text('pre_title_2_eng')->nullable(true);
            $table->text('pre_title_3')->nullable(true);
            $table->text('pre_title_3_eng')->nullable(true);
            $table->text('pre_title_4')->nullable(true);
            $table->text('pre_title_4_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index_text', function($table) {
            $table->dropColumn('pre_title_1');
            $table->dropColumn('pre_title_1_eng');
            $table->dropColumn('pre_title_2');
            $table->dropColumn('pre_title_2_eng');
            $table->dropColumn('pre_title_3');
            $table->dropColumn('pre_title_3_eng');
            $table->dropColumn('pre_title_4');
            $table->dropColumn('pre_title_4_eng');
        });
    }
};
