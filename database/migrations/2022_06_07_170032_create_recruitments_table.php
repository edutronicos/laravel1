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
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id();
            $table->string('contrato');
            $table->string('cliente');
            $table->string('nome_candidato');
            $table->string('email');
            $table->string('cargo_candidato');
            $table->string('admissao_candidato');
            $table->string('demissao_candidato')->nullable();
            $table->string('local_unidade');
            $table->string('salario');
            $table->string('valor_vt');
            $table->string('valor_vr');
            $table->string('horario');
            $table->string('frequencia');
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('observacao')->nullable();
            $table->string('rg');
            $table->string('cpf');
            $table->string('ctps');
            $table->string('serie');
            $table->string('pis');
            $table->string('data_nasc');
            $table->string('nome_pai')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('estado');
            $table->string('nome_filho1')->nullable();
            $table->string('cpf_filho1')->nullable();
            $table->string('data_nasc_filho1')->nullable();
            $table->string('nome_filho2')->nullable();
            $table->string('cpf_filho2')->nullable();
            $table->string('data_nasc_filho2')->nullable();
            $table->string('nome_banco');
            $table->string('tipo_conta');
            $table->string('agencia');
            $table->string('numero_conta');
            $table->string('tam_camisa');
            $table->string('tam_calca');
            $table->string('tam_sapato');
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
        Schema::dropIfExists('recruitments');
    }
};
