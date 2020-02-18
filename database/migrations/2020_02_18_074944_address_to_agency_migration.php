<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressToAgencyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'addressToAgency';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('addressId');
            $table->unsignedBigInteger('agencyId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('addressId')->references('id')->on('addresses');
            $table->foreign('agencyId')->references('id')->on('agencies');
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
