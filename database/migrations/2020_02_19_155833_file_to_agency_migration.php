<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FileToAgencyMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'fileToAgency';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('fileId');
            $table->unsignedBigInteger('agencyId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('fileId')->references('id')->on('files');
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
