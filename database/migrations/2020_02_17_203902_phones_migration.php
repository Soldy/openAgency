<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhonesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'phones';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->integer('countryCode')->default('44');
              $table->bigInteger('number');
              $table->string('extension', 10)->nullable();
              $table->timestamps();
              $table->softDeletes();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
