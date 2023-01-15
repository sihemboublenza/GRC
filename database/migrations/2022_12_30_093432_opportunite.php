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
		$table->string('nom_opp');
		$table->double('montant');
		$table->enum('etape',['Prospection','Proposition/Devis','Négociation/Vérification','Cloturée/Ganée','Cloturée/Perdue']);
		$table->date('date_de_cloture');
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
