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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('Azienda');
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100)->nullable();
            $table->string('Orario di partenza', 5)->nullable();
            $table->string('Orario di arrivo', 5)->nullable();
            $table->mediumInteger('Codice Treno');
            $table->tinyInteger('Numero Carrozze');
            $table->boolean('In orario');
            $table->boolean('Cancellato');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
