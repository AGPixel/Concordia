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
            $table->text('title')->nullable(true);
            $table->text('work_1')->nullable(true);
            $table->text('work_2')->nullable(true);
            $table->text('work_3')->nullable(true);
            $table->text('url_project')->nullable(true);
            $table->text('img_begin')->nullable(true);
            $table->text('title_employees')->nullable(true);
            $table->text('employee_job_1')->nullable(true);
            $table->text('employee_1')->nullable(true);
            $table->text('employee_job_2')->nullable(true);
            $table->text('employee_2')->nullable(true);
            $table->text('employee_job_3')->nullable(true);
            $table->text('employee_3')->nullable(true);
            $table->text('employee_job_4')->nullable(true);
            $table->text('employee_4')->nullable(true);
            $table->text('img_1')->nullable(true);
            $table->text('img_2')->nullable(true);
            $table->text('img_3')->nullable(true);
            $table->text('img_4')->nullable(true);
            $table->text('img_description_4')->nullable(true);
            $table->text('img_5')->nullable(true);
            $table->text('img_description_5')->nullable(true);
            $table->boolean('active')->default(true)->nullable(false);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
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
