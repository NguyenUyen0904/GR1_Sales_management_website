<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();           
            $table->string('password');           
            $table->timestamps(); 
            $table->unsignedBigInteger('admin_group_id');
            $table->foreign('admin_group_id')->references('id')->on('admin_groups');

            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores'); 
                    

            });

  

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
