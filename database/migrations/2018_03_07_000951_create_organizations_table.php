<?php

use Illuminate\Database\Schema\Blueprint;
use \App\Database\Migration;

class CreateorganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->comment('ten cong ty');
            $table->string('phone', 16)->nullable()->comment('so dien thoai');
            $table->string('email')->nullable()->comment('email');
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover')->nullable();
            $table->string('address')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('country_id')->nullable()->comment('thuoc nuoc nao');
            $table->unsignedInteger('admin_user_id');
            // Add some more columns

            $table->timestamps();
        });

        $this->updateTimestampDefaultValue('organizations', ['updated_at'], ['created_at']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
