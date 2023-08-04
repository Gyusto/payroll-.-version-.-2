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
    public function up(){
        Schema::create('person', function (Blueprint $table) {
            $table->bigIncrements('person_id')->index();
            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('birthDate');
            $table->string('gender');
            $table->string('ward')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('country')->nullable();
            $table->enum('voided', [0, 1])->default(0);
            $table->unsignedBigInteger('voided_by')->index()->nullable();
            $table->timestamp('date_voided')->nullable();
            $table->unsignedBigInteger('created_by')->index();
            $table->timestamp('date_created')->index()->useCurrent('now');
            $table->uuid('uuid')->unique()->index();
        });
        
        Schema::table('person',function (Blueprint $table){
            $table->foreign('created_by')->references('user_id')->on('users')->onUpdate('cascade');
            $table->foreign('voided_by')->references('user_id')->on('users')->onUpdate('cascade');
            
        });

        Schema::table('users',function (Blueprint $table){
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
    public function down(){
        Schema::dropIfExists('person');
    }
};
