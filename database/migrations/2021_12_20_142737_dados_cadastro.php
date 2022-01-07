<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DadosCadastro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function(Blueprint $table) {
            $table -> id('id');
            $table -> string('nome', 150);
            $table -> string('cpf', 11);
            $table -> string('rg', 9)->nullable();
            $table -> date('nasc');
            $table -> string('email',50);
            $table -> string('tel1', 11);
            $table -> string('tel2', 11)->nullable();
            $table -> string('logr', 150);
            $table -> string('num', 5);
            $table -> string('comp', 250)->nullable();
            $table -> string('cep', 8);
            $table -> string('cidade',100);
            $table -> string('uf', 2);
            $table -> string('pais', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(table:'cadastros');
    }
}
