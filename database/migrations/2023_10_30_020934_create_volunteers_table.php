<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('position');
            $table->string('image_url');
            // $table->string('expertise');
            // $table->integer('experience_years');
            $table->string('email');
            $table->string('phone');
            // $table->string('fax');
            $table->text('personal_experience');
            $table->string('skills');
            $table->boolean('active')->default(false);


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
        Schema::dropIfExists('volunteers');
    }
}
