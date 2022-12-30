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
		 
		 $table->id('id_rdv');
        $table->date('date');
		$table->string('heure');
		
		  $table->double('compterendu');
		    $table->unsignedBigInteger('contact')->nullable()->index();
			  $table->unsignedBigInteger('commercial')->nullable()->index();

 

 

    });
	  Schema::table('rdv', function (Blueprint $table) {

            $table->foreign('contact')

                  ->references('id_contact')

                  ->on('contact')

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