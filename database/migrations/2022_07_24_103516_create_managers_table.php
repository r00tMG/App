<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            
            $table->id();
            /* $table->string('nom');
            $table->string('prenom');
            $table->integer('tel');
            $table->string('email'); */
            $table->string('login');
/*             $table->string('role');
 */            $table->timestamps();
            $table->unsignedBigInteger('employee_id')->default();
            $table->unsignedBigInteger('chantier_id')->default();
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('chantier_id')->references('id')->on('chantiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
};
