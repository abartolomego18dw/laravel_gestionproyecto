<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkEmpleadoProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::table('empleados', function (Blueprint $table) {
                $table->unsignedBigInteger('proyecto_id')->nullable();
            
                $table->foreign('proyecto_id')->references('id')->on('proyectos');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            $table->dropForeign(['proyecto_id']);
        
    }
}
