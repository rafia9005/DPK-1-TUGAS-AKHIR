<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlumniTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('data_alumni', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 120);
            $table->integer('nomer');
            $table->string('kelas', 50);
            $table->string('alamat');
            $table->string('jurusan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('data_alumni');
    }
}
