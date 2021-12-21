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
        Schema::create('dadosCadastrados', function(Blueprint $table) {
            $table -> string('nome', 150);
            $table -> string('cpf', 11);
            $table -> string('rg', 9);
            $table -> date('nascimento');
            $table -> string('mãe', 150);
            $table -> string('pai', 150);
            $table -> string('tel1', 11);
            $table -> string('tel2', 11);
            $table -> string('logradouro', 150);
            $table -> string('número', 5);
            $table -> string('complemento', 250);
            $table -> string('cep', 7);
            $table -> string('cidade',100);
            $table -> string('uf', 3);
            $table -> string('país', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(table:'dadosCadastrados');
    }
}
