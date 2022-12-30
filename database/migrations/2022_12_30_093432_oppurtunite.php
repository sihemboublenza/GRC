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
          Schema::create('oppurtunite', function (Blueprint $table){
		  
		 $table->id('id_opp');
		$table->string('nom');
		$table->double('montant');
		$table->string('etape');
		$table->date('datedecloture');
	  $table->unsignedBigInteger('client')->nullable()->index();

 
   });
   
   
    Schema::table('oppurtunite', function (Blueprint $table) {

         
            $table->foreign('client')
			     
                  ->references('id_client')

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
