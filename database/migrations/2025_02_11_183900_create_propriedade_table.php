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
        Schema::create('propriedade', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('year')->nullable(true);
            $table->text('job_1')->nullable(true);
            $table->text('job_2')->nullable(true);
            $table->text('img_1')->nullable(true);
            $table->text('type_1')->nullable(true);
            $table->text('legend_1')->nullable(true);
            $table->text('img_2')->nullable(true);
            $table->text('type_2')->nullable(true);
            $table->text('legend_2')->nullable(true);
            $table->text('img_3')->nullable(true);
            $table->text('type_3')->nullable(true);
            $table->text('legend_3')->nullable(true);
            $table->text('img_4')->nullable(true);
            $table->text('type_4')->nullable(true);
            $table->text('legend_4')->nullable(true);
            $table->text('img_5')->nullable(true);
            $table->text('type_5')->nullable(true);
            $table->text('legend_5')->nullable(true);
            $table->text('img_6')->nullable(true);
            $table->text('type_6')->nullable(true);
            $table->text('legend_6')->nullable(true);
            $table->text('img_7')->nullable(true);
            $table->text('type_7')->nullable(true);
            $table->text('legend_7')->nullable(true);
            $table->boolean('active')->default(true)->nullable(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propriedade');
    }
};
