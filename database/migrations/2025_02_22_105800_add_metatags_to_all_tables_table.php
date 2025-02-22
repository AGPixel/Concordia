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
        Schema::table('index_text', function($table) { $this->addColumns($table); });    
        Schema::table('about', function($table) { $this->addColumns($table); });
        Schema::table('contact', function($table) { $this->addColumns($table); });
        Schema::table('oportunidade', function($table) { $this->addColumns($table); });
        Schema::table('portifolio_geral', function($table) { $this->addColumns($table); });
        Schema::table('project', function($table) { $this->addColumns($table); });
        Schema::table('propriedade', function($table) { $this->addColumns($table); });
        Schema::table('servico_geral', function($table) { $this->addColumns($table); });
        Schema::table('work', function($table) { $this->addColumns($table); });
    }

    private function addColumns($table) {
        $table->text('meta_tags_title')->nullable(true);
        $table->text('meta_tags_description')->nullable(true);
        $table->text('meta_tags_keywords')->nullable(true);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('index_text', function($table) { $this->removeColumns($table); });
        Schema::table('about', function($table) { $this->removeColumns($table); });
        Schema::table('contact', function($table) { $this->removeColumns($table); });
        Schema::table('oportunidade', function($table) { $this->removeColumns($table); });
        Schema::table('portifolio_geral', function($table) { $this->removeColumns($table); });
        Schema::table('project', function($table) { $this->removeColumns($table); });
        Schema::table('propriedade', function($table) { $this->removeColumns($table); });
        Schema::table('servico_geral', function($table) { $this->removeColumns($table); });
        Schema::table('work', function($table) { $this->removeColumns($table); });
    }

    private function removeColumns($table) {
        $table->dropColumn('meta_tags_title');
        $table->dropColumn('meta_tags_description');
        $table->dropColumn('meta_tags_keywords');
    }
};
