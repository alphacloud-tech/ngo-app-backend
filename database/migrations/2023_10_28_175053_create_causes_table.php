<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->id();

            $table->string('title'); // Cause title
            $table->text('description'); // Cause description
            $table->string('image_url'); // URL or path to the cause image
            $table->decimal('target_amount', 10, 2); // Target fundraising amount
            $table->decimal('raised_amount', 10, 2)->default(0); // Raised amount (default to 0)
            $table->foreignId('cause_category_id')->constrained();
            $table->boolean('featured')->default(false);

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
        Schema::dropIfExists('causes');
    }
}
