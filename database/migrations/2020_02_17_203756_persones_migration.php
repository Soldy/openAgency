<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonesMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'persones';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name', 70);
            $table->string('gender', 10);
            $table->text('description')->default(" ");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
