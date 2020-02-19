<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CompanyToCaseMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'companyToCase';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('companyId');
            $table->unsignedBigInteger('caseId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('companyId')->references('id')->on('companies');
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
