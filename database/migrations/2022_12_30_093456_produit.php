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
        	
		 Schema::create('produit', function (Blueprint $table){
		 
		 $table->id('id_produit');
        $table->string('nom');
		$table->string('description');
		 $table->string('photo')->default('default.jpg');
		  $table->double('prix');
		   $table->integer('quanite');

		
		
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
