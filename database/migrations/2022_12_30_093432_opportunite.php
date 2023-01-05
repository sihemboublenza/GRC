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
        Schema::create('opportunite', function (Blueprint $table){
		  
		$table->id('id');
		$table->string('nom');
		$table->double('montant');
		$table->integer('etape');
		$table->date('date_de_cloture');
        $table->string('produit');

	    $table->unsignedBigInteger('client')->nullable()->index();
        $table->timestamps();
 
   });
   
   
    Schema::table('opportunite', function (Blueprint $table) {

         
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
