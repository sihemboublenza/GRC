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
		 Schema::create('prospect', function (Blueprint $table){
		 
		 $table->id('id_prospect');
        $table->string('nom');
		$table->string('prenom');
		$table->string('societe');
		$table->string('foction');
		$table->string('email');
		$table->string('tel',10);
		$table->string('adresse');
		$table->string('siteweb');
		 $table->enum('statut', ['chaud','froid']);
		$table->string('source');
	
		
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
