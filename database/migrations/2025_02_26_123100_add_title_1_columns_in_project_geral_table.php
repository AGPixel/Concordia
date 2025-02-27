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
        Schema::table('portifolio_geral', function($table) {
            $table->text('title_1')->nullable(true);
            $table->text('title_1_eng')->nullable(true);
            $table->text('description_1')->nullable(true);
            $table->text('description_1_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portifolio_geral', function($table) {
            $table->dropColumn('title_1');
            $table->dropColumn('title_1_eng');
            $table->dropColumn('description_1');
            $table->dropColumn('description_1_eng');
        });
    }
};
