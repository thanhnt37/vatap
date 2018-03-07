<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreatebatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->comment('ten lo tem');
            $table->unsignedInteger('quantity');
//            $table->unsignedInteger('product_id')->nullable()->comment('id san pham');
//            $table->unsignedInteger('guarantee_days')->default(0);
            $table->unsignedInteger('organization_id')->comment('id cong ty');
            $table->unsignedTinyInteger('generate_code_status')->default(0);
            $table->longText('metadata');
            $table->softDeletes();

            // Add some more columns

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('batches', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
