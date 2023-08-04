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
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('created_by')->index();
            $table->enum('voided', [0, 1])->default(0);
            $table->timestamp('date_created')->index()->useCurrent('now');
            $table->unsignedBigInteger('changed_by')->index()->nullable();
            $table->enum('retired', [0, 1])->default(0);
            $table->timestamp('date_changed')->index()->nullable();
            $table->uuid('uuid')->unique()->index();
        });

        Schema::table('departments',function (Blueprint $table){
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
        Schema::dropIfExists('departments');
    }
};
