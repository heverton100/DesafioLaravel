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
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('razao_social');
            $table->string('email');
            $table->string('cidade');
            $table->string('uf');
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('numero');
            $table->string('complemento')->nullable();
            $table->string('cpf_cnpj');
            $table->integer('ddd')->nullable();
            $table->string('fone')->nullable();
            $table->string('data_cadastro');
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
        Schema::dropIfExists('pessoa');
    }
};