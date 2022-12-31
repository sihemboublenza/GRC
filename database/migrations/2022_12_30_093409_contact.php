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
        
		
		 Schema::create('contact', function (Blueprint $table){
		 
		$table->id('id');
        $table->string('nom');
		$table->string('prenom');
		$table->string('fonction');
		$table->string('tel',10);
        $table->string('email')->unique();
		$table->string('password');	
		$table->unsignedBigInteger('client')->nullable()->index();
        $table->timestamps();

 
    });
	
	 Schema::table('contact', function (Blueprint $table) {

         
            $table->foreign('client')
			     
                  ->references('id')

                  ->on('client')

                  ->onDelete('cascade')

                  ->onUpdate('cascade');


        });
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
