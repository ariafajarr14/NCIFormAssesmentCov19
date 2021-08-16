<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_answers', function (Blueprint $table) {
            $table->id();
            $table->string('clientid');
            $table->string('clientname');
            $table->string('quest_one');
            $table->string('quest_two');
            $table->string('quest_three');
            $table->string('quest_four');
            $table->string('quest_five');
            $table->string('quest_six');
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
        Schema::dropIfExists('form_answers');
    }
}
