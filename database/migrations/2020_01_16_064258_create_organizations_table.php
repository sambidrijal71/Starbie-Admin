<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organization', function (Blueprint $table) {
            $table->bigIncrements('oid');
            $table->string('name');
            $table->string('logo');
            $table->string('themecolor');
            $table->string('contactno1');
            $table->string('contactno2');
            $table->string('headquarter');
            $table->string('about');
            $table->boolean('mustreg');
            $table->boolean('canreg');
            $table->boolean('mustapprove');
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
        Schema::dropIfExists('organizations');
    }
}
