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
            for($i = 8; $i < 26; $i++) {
                $this->addNewColumns($table,$i);
            }
        });
    }

    private function addNewColumns($table,$i) {
        $table->text('img_'.$i)->nullable(true);
        $table->text('title_'.$i)->nullable(true);
        $table->text('title_'.$i.'_eng')->nullable(true);
        $table->text('type_'.$i.'_1')->nullable(true);
        $table->text('type_'.$i.'_2')->nullable(true);
        $table->text('type_'.$i.'_1_eng')->nullable(true);
        $table->text('type_'.$i.'_2_eng')->nullable(true);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('work', function($table) { 
            for($i = 8; $i < 26; $i++) {
                $this->dropColumns($table,$i);
            }
        });
    }

    private function dropColumns($table,$i) {
        $table->dropColumn('img_'.$i);
        $table->dropColumn('title_'.$i);
        $table->dropColumn('title_'.$i.'_eng');
        $table->dropColumn('type_'.$i.'_1');
        $table->dropColumn('type_'.$i.'_2');
        $table->dropColumn('type_'.$i.'_1_eng');
        $table->dropColumn('type_'.$i.'_2_eng');
    }
};
