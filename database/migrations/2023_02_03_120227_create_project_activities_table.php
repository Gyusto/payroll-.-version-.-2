<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('project_activities', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id')->index();
            $table->unsignedBigInteger('activity_id')->index();
            $table->unsignedBigInteger('employee_id')->index();
            $table->timestamp('date_started')->index()->nullable();
            $table->timestamp('date_stopped')->index()->nullable();
            $table->integer('duration')->nullable();
            $table->unsignedBigInteger('created_by')->index();
            $table->enum('voided', [0, 1])->default(0);
            $table->timestamp('date_created')->index()->useCurrent('now');
            $table->unsignedBigInteger('changed_by')->index()->nullable();
            $table->enum('retired', [0, 1])->default(0);
            $table->timestamp('date_changed')->index()->nullable();
            $table->uuid('uuid')->unique()->index();
        });

        Schema::table('project_activities',function (Blueprint $table){
            $table->foreign('project_id')->references('project_id')->on('projects')->onUpdate('cascade');
            $table->foreign('activity_id')->references('activity_id')->on('activities')->onUpdate('cascade');
            $table->foreign('employee_id')->references('employee_id')->on('employees')->onUpdate('cascade');
            $table->foreign('created_by')->references('user_id')->on('users')->onUpdate('cascade');
            $table->foreign('changed_by')->references('user_id')->on('users')->onUpdate('cascade');
            
        });            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_activities');
    }
};
