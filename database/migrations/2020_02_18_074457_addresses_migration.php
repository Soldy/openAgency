<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'addresses';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
              $table->bigIncrements('id')->unsigned();
              $table->string('country');
              $table->string('subcountry');
              $table->string('city');
              $table->string('Address');
              $table->string('zip');
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
