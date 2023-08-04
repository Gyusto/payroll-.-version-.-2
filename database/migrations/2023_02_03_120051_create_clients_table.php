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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('client_id');
            $table->string('name')->unique();
            $table->unsignedBigInteger('created_by')->index();
            $table->timestamp('date_created')->index()->useCurrent('now');
            $table->enum('voided', [0, 1])->default(0);
            $table->unsignedBigInteger('changed_by')->index()->nullable();
        });
        
          Schema::table('clients',function (Blueprint $table){
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
        Schema::dropIfExists('clients');
    }
};
