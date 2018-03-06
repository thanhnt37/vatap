<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreatecodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('organization_id')->comment('id cong ty');
            $table->unsignedInteger('batch_id')->comment('id lo tem');
            $table->unsignedInteger('product_id')->nullable()->comment('id san pham');
            $table->unsignedTinyInteger('active')->default(1);
//            $table->unsignedTinyInteger('guarantee_active')->default(0);
            $table->timestamps();
            $table->softDeletes();

//            $table->unique(['organization_id', 'batch_id', 'product_id']);
        });

        $this->updateTimestampDefaultValue('codes', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codes');
    }
}
