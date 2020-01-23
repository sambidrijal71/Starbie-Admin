<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('bid');
            $table->integer('oid');
            $table->integer('addressid');
            $table->integer('postaladdressid');
            $table->string('contactno');
            $table->string('about');
            $table->string('gallery');
            $table->string('pobox');
            $table->string('street_num');
            
            $table->timestamps();
                   });
                }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branches');
    }
}
