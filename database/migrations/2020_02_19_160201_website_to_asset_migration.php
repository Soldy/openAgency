<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebsiteToAssetMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'websiteToAsset';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('websiteId');
            $table->unsignedBigInteger('assetId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('websiteId')->references('id')->on('websites');
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
