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
        Schema::create('employees', function (Blueprint $table) {

            $table->bigIncrements('employee_id');
            $table->unsignedBigInteger('person_id')->index();
            $table->string('employee_number');
            $table->enum('voided', [0, 1])->default(0);
            $table->unsignedBigInteger('department_id')->index()->nullable();
            $table->unsignedBigInteger('changed_by')->index()->nullable();
            $table->timestamp('date_changed')->index()->nullable();
            $table->unsignedBigInteger('created_by')->index();
            $table->timestamp('date_created')->index()->useCurrent('now');
            $table->uuid('uuid')->unique()->index();
            
        });

        Schema::table('employees',function (Blueprint $table){
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade');
            $table->foreign('person_id')->references('person_id')->on('person')->onUpdate('cascade');
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
        Schema::dropIfExists('employees');
    }
};
