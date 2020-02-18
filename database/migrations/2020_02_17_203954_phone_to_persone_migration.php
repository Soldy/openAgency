<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhoneToPersoneMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'phoneToPerson';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->unsignedBigInteger('phoneId');
            $table->unsignedBigInteger('personId');
            $table->string('comment');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('phoneId')->references('id')->on('phones');
            $table->foreign('personId')->references('id')->on('persones');
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
