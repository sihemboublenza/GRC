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
   Schema::create('rdv', function (Blueprint $table){
		 
		$table->id('id');
        $table->date('date');
		$table->time('heure');		
		$table->string('compterendu');
	    $table->unsignedBigInteger('client')->nullable()->index();
		$table->unsignedBigInteger('commercial')->nullable()->index();
        $table->timestamps(); 

    });
	  Schema::table('rdv', function (Blueprint $table) {

            $table->foreign('client')

                  ->references('id')

                  ->on('client')

                  ->onDelete('cascade')

                  ->onUpdate('cascade');



            $table->foreign('commercial')

                  ->references('id')

                  ->on('users')

                  ->onDelete('cascade')

                  ->onUpdate('cascade');

           // $table->engine = 'InnoDB';

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
