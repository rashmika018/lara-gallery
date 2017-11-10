<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::create('membership_type', function(Blueprint $table)
    	{
    		$table->increments('id')->unsigned();
    		$table->integer('uid')->unsigned();
    		$table->string('title')->unique();
    		$table->string('price');
    		$table->string('description');
    		$table->foreign('uid')->references('id')->on('user')->onDelete('CASCADE')->onUpdate('CASCADE');
    		$table->timestamps();
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
    	Schema::drop('membership_type');
    }
}
