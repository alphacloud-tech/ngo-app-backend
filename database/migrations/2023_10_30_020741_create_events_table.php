<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('location_map');
            $table->string('location');
            $table->string('image_url');
            $table->unsignedBigInteger('event_organizer_id')->nullable();


            $table->boolean('active')->default(false);
            $table->timestamps();

            $table->foreign('event_organizer_id')->references('id')->on('event_organizers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
