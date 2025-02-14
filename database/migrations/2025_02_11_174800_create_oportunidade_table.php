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
        Schema::create('oportunidade', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable(true);
            $table->text('description')->nullable(true);
            $table->text('year')->nullable(true);
            $table->text('job_1')->nullable(true);
            $table->text('job_2')->nullable(true);
            $table->text('img_1')->nullable(true);
            $table->text('type_1')->nullable(true);
            $table->text('title_1')->nullable(true);
            $table->text('img_2')->nullable(true);
            $table->text('type_2')->nullable(true);
            $table->text('title_2')->nullable(true);
            $table->text('img_3')->nullable(true);
            $table->text('type_3')->nullable(true);
            $table->text('title_3')->nullable(true);
            $table->text('img_4')->nullable(true);
            $table->text('type_4')->nullable(true);
            $table->text('title_4')->nullable(true);

            $table->text('title_eng')->nullable(true);
            $table->text('description_eng')->nullable(true);
            $table->text('job_1_eng')->nullable(true);
            $table->text('job_2_eng')->nullable(true);
            $table->text('type_1_eng')->nullable(true);
            $table->text('title_1_eng')->nullable(true);
            $table->text('type_2_eng')->nullable(true);
            $table->text('title_2_eng')->nullable(true);
            $table->text('type_3_eng')->nullable(true);
            $table->text('title_3_eng')->nullable(true);
            $table->text('type_4_eng')->nullable(true);
            $table->text('title_4_eng')->nullable(true);

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
        Schema::dropIfExists('oportunidade');
    }
};
