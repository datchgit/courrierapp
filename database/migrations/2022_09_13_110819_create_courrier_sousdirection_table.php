<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourrierSousdirectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courrier_sousdirection', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sousdirection_id')->nullable();
            $table->unsignedBigInteger('courrier_id');
            $table->unsignedBigInteger('expediteur');
            $table->string('operation');
            $table->string('libelle');
            $table->unsignedBigInteger('service');
            $table->unsignedBigInteger('destinataire');
            $table->string('statut');
            $table->timestamps();
            $table->foreign('sousdirection_id')->references('id')->on('sousdirections')
            ->onDelete('cascade')
            ->onUpdate('cascade');;
            $table->foreign('courrier_id')->references('id')->on('courriers')
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
        Schema::dropIfExists('courrier_sousdirection');
    }
}
