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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
			$table->bigInteger('id_client')->unsigned();
			$table->string('tel')->nullable();
			$table->string('siteweb')->nullable();
			$table->string('image')->nullable();
			$table->string('modepasse')->nullable();
			$table->string('societe')->nullable();

            $table->timestamps();
			$table->foreign('id_client')->references('id')->on('client')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
