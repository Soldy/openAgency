<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressToEventMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'addressToEvent';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('addressId');
            $table->unsignedBigInteger('eventId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('addressId')->references('id')->on('addresses');
            $table->foreign('eventId')->references('id')->on('events');
              $table->bigIncrements('id')->unsigned();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
