<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appoints', function (Blueprint $table) {
            $table->id();
            $table->string('docname');
            $table->string('fname');
            $table->integer('age');
            $table->string('occu');
            $table->enum("sex",['male','female']);
            $table->string('phone');
            $table->string('email');
            $table->string('addr');
            $table->date('date');
            $table->string('cardn');
            $table->string('authn')->nullable();
            $table->string('payment');
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
        Schema::dropIfExists('appoints');
    }
}
