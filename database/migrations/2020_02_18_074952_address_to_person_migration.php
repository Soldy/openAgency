<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressToPersonMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'addressToPerson';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('addressId');
            $table->unsignedBigInteger('personId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('addressId')->references('id')->on('addresses');
            $table->foreign('personId')->references('id')->on('persones');
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
