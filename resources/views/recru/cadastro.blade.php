@extends('layouts.modelo')

@section('title', 'Dados Funcionário')

@section('content')
    <div class="text-center p-2 mt-2">
    <h4>INFORMAÇÕES DO CADASTRO</h4>
        
    </div>
    
    <div class="container mt-2">

        <table class="table table-sm table-hover">
            <thead><tr><th colspan="6">INFORMAÇÕES VAGA</th></tr></thead>
            <tr><th>CONTRATO</th><td>{{$cadastro->contrato}}</td><th>CLIENTE</th><td>{{$cadastro->cliente}}</td><th>LOCAL\UNIDADE</th><td>{{$cadastro->local_unidade}}</td></tr>
            <tr><th>NOME</th><td colspan="3">{{$cadastro->nome_candidato}}</td><th>E-MAIL</th><td>{{$cadastro->email}}</td></tr>
            <tr><th>CARGO</th><td>{{$cadastro->cargo_candidato}}</td><th>ADMISSÃO</th><td>{{date('d/m/Y', strtotime($cadastro->admissao_candidato))}}{{$cadastro->admissao_candidato}}</td><th>DEMISSÃO</th><td>{{$cadastro->demissao_candidato}}</td></tr>
            <tr><th>SALARIO</th><td>{{$cadastro->salario}}</td><th>VALE TRANSPORTE</th><td>{{$cadastro->valor_vt}}</td><th>VALE REFEIÇÃO</th><td>{{$cadastro->valor_vr}}</td></tr>
            <tr><th>HORARIO</th><td colspan="3">{{$cadastro->horario}}</td><th>FREQUÊNCIA</th><td>{{$cadastro->frequencia}}</td></tr>
            <tr><th>TELEFONE</th><td>{{$cadastro->telefone}}</td><th>CELULAR</th><td>{{$cadastro->celular}}</td></tr>
            <tr><th>OBS:</th><td colspan="5">{{$cadastro->observacao}}</td></tr>
        </table>

        <table class="table table-sm table-hover">
        <thead><tr><th colspan="6">DOCUMENTOS</th></tr></thead>
            <tr><th>RG:</th><td>{{$cadastro->rg}}</td><th>CPF:</th><td>{{$cadastro->cpf}}</td><th>CTPS:</th><td>{{$cadastro->ctps}}</td></tr>
            <tr><th>SERIE:</th><td>{{$cadastro->serie}}</td><th>PIS:</th><td>{{$cadastro->pis}}</td><th>DATA NASCIMENTO:</th><td>{{$cadastro->data_nasc}}</td></tr>
            <tr><th >NOME DO PAI:</th><td>{{$cadastro->nome_pai}}</td></tr>
            <tr><th>NOME DA MÃE:</th><td>{{$cadastro->nome_mae}}</td></tr>
        </table>

        <table class="table table-sm table-hover">
        <thead><tr><th colspan="6">ENDEREÇO</th></tr></thead>
            <tr><th>RUA:</th><td colspan="3">{{$cadastro->endereco}}</td><th>BAIRRO:</th><td>{{$cadastro->bairro}}</td></tr>
            <tr><th>CEP:</th><td>{{$cadastro->cep}}</td><th>CIDADE:</th><td>{{$cadastro->cidade}}</td><th>ESTADO:</th><td>{{$cadastro->estado}}</td></tr>
        </table>

        <table class="table table-sm table-hover">
        <thead><tr><th colspan="6">DADOS PARA SALARIO FAMILIA MENORES DE 14 ANOS</th></tr></thead>
            <tr><th>NOME DO FILHO:</th><td>{{$cadastro->nome_filho1}}</td><th>CPF:</th><td>{{$cadastro->cpf_filho1}}</td><th>DATA NASCIMENTO:</th><td>{{$cadastro->data_nasc_filho1}}</td></tr>
            <tr><th>NOME DO FILHO:</th><td>{{$cadastro->nome_filho2}}</td><th>CPF:</th><td>{{$cadastro->cpf_filho2}}</td><th>DATA NASCIMENTO:</th><td>{{$cadastro->data_nasc_filho2}}</td></tr>
        </table>

        <table class="table table-sm table-hover">
        <thead><tr><th colspan="6">DADOS BANCÁRIOS (ITAU / BRADESCO)</th></tr></thead>
            <tr><th>BANCO:</th><td>{{$cadastro->nome_banco}}</td><th>TIPO DE CONTA:</th><td>{{$cadastro->tipo_conta}}</td></tr>
            <tr><th>AGÊNCIA:</th><td>{{$cadastro->agencia}}</td><th>NÚMERO DA CONTA:</th><td>{{$cadastro->numero_conta}}</td></tr>
        </table>

        <table class="table table-sm table-hover">
        <thead><tr><th colspan="6">UNIFORMES</th></tr></thead>
            <tr><th>TAMANHO CAMISA:</th><td>{{$cadastro->tam_camisa}}</td><th>TAMANHO CALÇA:</th><td>{{$cadastro->tam_calca}}</td><th>TAMANHO SAPATO:</th><td>{{$cadastro->tam_sapato}}</td></tr>
        </table>
@endsection