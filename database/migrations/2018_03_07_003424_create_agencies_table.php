<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateagenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('ten cua hang');
            $table->string('address');
            $table->unsignedInteger('city_id')->comment('id thanh pho');
            $table->unsignedInteger('organization_id')->comment('id cong ty');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['id','organization_id','city_id']);
        });

        $this->updateTimestampDefaultValue('agencies', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agencies');
    }
}
