<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressToAssetMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'addressToAsset';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('addressId');
            $table->unsignedBigInteger('assetId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('addressId')->references('id')->on('addresses');
            $table->foreign('assetId')->references('id')->on('assets');
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
