<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreatelogActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_actives', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('admin_user_id')->comment('id user');
            $table->unsignedInteger('organization_id')->comment('id cong ty');
            $table->unsignedInteger('product_id')->nullable()->comment('id san pham');
            $table->unsignedInteger('agency_id')->nullable()->comment('id banner');
            $table->unsignedInteger('city_id')->nullable()->comment('id thanh pho');
            $table->unsignedInteger('code_id')->comment('id tem');
            $table->unsignedTinyInteger('type')->comment('0 = app, 1 = sms');
            // Add some more columns

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('log_actives', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_actives');
    }
}
