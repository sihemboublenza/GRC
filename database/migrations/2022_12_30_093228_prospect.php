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
		 
		$table->id('id');
        $table->string('nom');
		$table->string('prenom');
		$table->string('societe');
		$table->string('fonction');
		$table->string('email');
		$table->string('tel',10);
		$table->string('adresse')->nullable();
		$table->string('siteweb')->nullable();
		$table->enum('statut', ['Chaud','Froid']);
		$table->enum('source', ['Web','Téléphone','Partenaire','Salon','Bouche à oreille','Liste prospects','Autre']);
        $table->timestamps();
        $table->boolean('transformed')->default(0);
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
