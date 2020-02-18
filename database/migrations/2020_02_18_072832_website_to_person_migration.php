<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WebsiteToPersonMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'websiteToPerson';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('websiteId');
            $table->unsignedBigInteger('personId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('websiteId')->references('id')->on('websites');
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
