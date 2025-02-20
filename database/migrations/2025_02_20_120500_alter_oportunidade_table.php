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
        Schema::table('oportunidade', function($table) {
            $table->string('contact_title',200)->default('Estamos cá para ajudar')->nullable(false);
            $table->string('contact_title_eng',200)->default('Talk to us')->nullable(false);
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oportunidade', function($table) {
            $table->dropColumn('contact_title');
            $table->dropColumn('contact_title_eng');
        });
    }
};
