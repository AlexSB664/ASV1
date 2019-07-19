<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntercambioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intercambio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('compra1',100);
            $table->string('telefono1',100);
            $table->string('regala1',100);
            
            $table->string('compra2',100);
            $table->string('telefono2',100);
            $table->string('regala2',100);
            
            $table->string('compra3',100);
            $table->string('telefono3',100);
            $table->string('regala3',100);
            
            $table->string('compra4',100)->nullable();
            $table->string('telefono4',100)->nullable();
            $table->string('regala4',100)->nullable();
            
            $table->string('compra5',100)->nullable();
            $table->string('telefono5',100)->nullable();
            $table->string('regala5',100)->nullable();
            
            $table->string('compra6',100)->nullable();
            $table->string('telefono6',100)->nullable();
            $table->string('regala6',100)->nullable();
            
            $table->string('compra7',100)->nullable();
            $table->string('telefono7',100)->nullable();
            $table->string('regala7',100)->nullable();
            
            $table->string('compra8',100)->nullable();
            $table->string('telefono8',100)->nullable();
            $table->string('regala8',100)->nullable();
            
            $table->string('compra9',100)->nullable();
            $table->string('telefono9',100)->nullable();
            $table->string('regala9',100)->nullable();
            
            $table->string('compra10',100)->nullable();
            $table->string('telefono10',100)->nullable();
            $table->string('regala10',100)->nullable();
            
            $table->string('compra11',100)->nullable();
            $table->string('telefono11',100)->nullable();
            $table->string('regala11',100)->nullable();
            
            $table->string('compra12',100)->nullable();
            $table->string('telefono12',100)->nullable();
            $table->string('regala12',100)->nullable();
        
            $table->text('clave_privada');
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
        Schema::dropIfExists('intercambio');
    }
}
