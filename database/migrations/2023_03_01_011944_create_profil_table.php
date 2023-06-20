<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->integer('nis');
            $table->string('nama',50);
            $table->enum('jk',['L','P']);
            $table->string('ttl',40);
            $table->string('pendidikan');
            $table->string('alamat');
            $table->text('foto');
            $table->string('about');
            $table->primary('nis');
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
        Schema::dropIfExists('profil');
    }
}
