<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssetToCaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'assetToCase';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('assetId');
            $table->unsignedBigInteger('caseId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('assetId')->references('id')->on('assets');
            $table->foreign('caseId')->references('id')->on('cases');
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
