<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreatecountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('numeric_code', 3)->nullable();
            $table->string('alpha2_code', 2)->nullable();
            $table->string('alpha3_code', 3)->nullable();
            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('countries', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
