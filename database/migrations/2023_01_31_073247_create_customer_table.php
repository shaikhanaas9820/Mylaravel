<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string("name" , 60)->default('');
            $table->string("email" , 60)->default('');
            $table->string("password");
            $table->date("dob")->nullable('');
            $table->enum("gender",["M" , "F" , "O"])->nullable('');
            $table->text("address");
            $table->string("country" , 50)->default('');
            $table->string("state" , 50)->default('');
            $table->timestamps();
            $table->integer("status")->default(1);
            $table->integer("is_deleted")->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
