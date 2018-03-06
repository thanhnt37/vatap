<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('ten san pham');
            $table->string('logo')->nullable();
            $table->unsignedBigInteger('price')->default(0);
            $table->string('gtin')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('organization_id')->comment('id cong ty');
            // Add some more columns

            $table->timestamps();
            $table->softDeletes();
        });

        $this->updateTimestampDefaultValue('products', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
