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
        Schema::create('opp_prod', function (Blueprint $table){
		  
            $table->id('id');
            $table->unsignedBigInteger('opportunite')->nullable()->index();
            $table->unsignedBigInteger('produit')->nullable()->index();
            $table->unsignedBigInteger('qte')->nullable();
            $table->timestamps();
     
       });
       Schema::table('opp_prod', function (Blueprint $table) {

         

            $table->foreign('opportunite')

                  ->references('id')

                  ->on('opportunite')

                  ->onDelete('cascade')

                  ->onUpdate('cascade');



            $table->foreign('produit')

                  ->references('id')

                  ->on('produit')

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
