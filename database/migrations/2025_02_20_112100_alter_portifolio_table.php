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
        Schema::table('work', function($table) {
            $table->dropColumn('type_1');
            $table->dropColumn('type_2');
            $table->dropColumn('type_3');
            $table->dropColumn('type_4');
            $table->dropColumn('type_5');
            $table->dropColumn('type_6');
            $table->dropColumn('type_7');
            $table->dropColumn('type_1_eng');
            $table->dropColumn('type_2_eng');
            $table->dropColumn('type_3_eng');
            $table->dropColumn('type_4_eng');
            $table->dropColumn('type_5_eng');
            $table->dropColumn('type_6_eng');
            $table->dropColumn('type_7_eng');

            $table->text('type_1_1')->nullable(true);
            $table->text('type_1_2')->nullable(true);
            $table->text('type_2_1')->nullable(true);
            $table->text('type_2_2')->nullable(true);
            $table->text('type_3_1')->nullable(true);
            $table->text('type_3_2')->nullable(true);
            $table->text('type_4_1')->nullable(true);
            $table->text('type_4_2')->nullable(true);
            $table->text('type_5_1')->nullable(true);
            $table->text('type_5_2')->nullable(true);
            $table->text('type_6_1')->nullable(true);
            $table->text('type_6_2')->nullable(true);
            $table->text('type_7_1')->nullable(true);
            $table->text('type_7_2')->nullable(true);
            $table->text('type_1_1_eng')->nullable(true);
            $table->text('type_1_2_eng')->nullable(true);
            $table->text('type_2_1_eng')->nullable(true);
            $table->text('type_2_2_eng')->nullable(true);
            $table->text('type_3_1_eng')->nullable(true);
            $table->text('type_3_2_eng')->nullable(true);
            $table->text('type_4_1_eng')->nullable(true);
            $table->text('type_4_2_eng')->nullable(true);
            $table->text('type_5_1_eng')->nullable(true);
            $table->text('type_5_2_eng')->nullable(true);
            $table->text('type_6_1_eng')->nullable(true);
            $table->text('type_6_2_eng')->nullable(true);
            $table->text('type_7_1_eng')->nullable(true);
            $table->text('type_7_2_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work', function($table) {
            $table->dropColumn('type_1_1');
            $table->dropColumn('type_1_2');
            $table->dropColumn('type_2_1');
            $table->dropColumn('type_2_2');
            $table->dropColumn('type_3_1');
            $table->dropColumn('type_3_2');
            $table->dropColumn('type_4_1');
            $table->dropColumn('type_4_2');
            $table->dropColumn('type_5_1');
            $table->dropColumn('type_5_2');
            $table->dropColumn('type_6_1');
            $table->dropColumn('type_6_2');
            $table->dropColumn('type_7_1');
            $table->dropColumn('type_7_2');
            $table->dropColumn('type_1_1_eng');
            $table->dropColumn('type_1_2_eng');
            $table->dropColumn('type_2_1_eng');
            $table->dropColumn('type_2_2_eng');
            $table->dropColumn('type_3_1_eng');
            $table->dropColumn('type_3_2_eng');
            $table->dropColumn('type_4_1_eng');
            $table->dropColumn('type_4_2_eng');
            $table->dropColumn('type_5_1_eng');
            $table->dropColumn('type_5_2_eng');
            $table->dropColumn('type_6_1_eng');
            $table->dropColumn('type_6_2_eng');
            $table->dropColumn('type_7_1_eng');
            $table->dropColumn('type_7_2_eng');

            $table->text('type_1')->nullable(true);
            $table->text('type_2')->nullable(true);
            $table->text('type_3')->nullable(true);
            $table->text('type_4')->nullable(true);
            $table->text('type_5')->nullable(true);
            $table->text('type_6')->nullable(true);
            $table->text('type_7')->nullable(true);
            $table->text('type_1_eng')->nullable(true);
            $table->text('type_2_eng')->nullable(true);
            $table->text('type_3_eng')->nullable(true);
            $table->text('type_4_eng')->nullable(true);
            $table->text('type_5_eng')->nullable(true);
            $table->text('type_6_eng')->nullable(true);
            $table->text('type_7_eng')->nullable(true);
        });
    }
};
