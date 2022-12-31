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
     
        Schema::create('client', function (Blueprint $table){
            
		$table->id();
		$table->string('societe');
		$table->string('tel',10);
		$table->string('adresse');
		$table->string('siteweb');
		$table->unsignedBigInteger('prospect')->nullable()->index();
        $table->timestamps();

 
	
   });
	 Schema::table('client', function (Blueprint $table) {

         

 
            $table->foreign('prospect')
			     
                  ->references('id')

                  ->on('prospect');

                 

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
