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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->text('title_1')->nullable(true);
            $table->text('description_1')->nullable(true);
            $table->text('img_1')->nullable(true);
            $table->text('img_2')->nullable(true);
            $table->text('img_3')->nullable(true);
            $table->text('img_4')->nullable(true);
            $table->text('title_2')->nullable(true);
            $table->text('description_2')->nullable(true);

            $table->text('title_1_eng')->nullable(true);
            $table->text('description_1_eng')->nullable(true);
            $table->text('title_2_eng')->nullable(true);
            $table->text('description_2_eng')->nullable(true);

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
        Schema::dropIfExists('project');
    }
};
