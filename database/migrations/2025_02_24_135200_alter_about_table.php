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
            $table->text('title')->nullable(true);
            $table->text('title_eng')->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('description_eng')->nullable(true);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about', function($table) {
            $table->dropColumn('title');
            $table->dropColumn('title_eng');
            $table->dropColumn('description');
            $table->dropColumn('description_eng');
        });
    }
};
