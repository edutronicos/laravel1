@extends('layouts.modelo')

@section('title', 'Início')

@section('content')

    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                                                
    <div class="text-center p-2">
            <h1>Cadastro de Funcionários</h1>
    </div>   

    <div class="container mt-5">
        
        <form class="row g-3 needs-validation" action="/recru/novo" method="post" novalidate>
        @csrf
        <h4>INFORMAÇÕES VAGA E FUNCIONÁRIO</h4>

            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="contrato" id="contrato" placeholder="Contrato" required>
            </div>
            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="cliente" id="cliente" placeholder="Cliente" required>
            </div>
            <div class="col-12">
                <input class="form-control form-control-sm" type="text" name="nome_candidato" id="nome_candidato" placeholder="Nome do Candidato" required>
            </div>
            <div class="col-12">
                <input class="form-control form-control-sm" type="text" name="email" id="email" placeholder="E-mail" required>
            </div>
            <div class="col-md-4">
                <label for="inputText" class="form-label col-form-label-sm">Cargo</label>
                <input class="form-control form-control-sm" type="text" name="cargo_candidato" id="cargo_candidato" placeholder="Cargo do Candidato" required>
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Admissão</label>
                <input class="form-control form-control-sm" type="date" name="admissao_candidato" id="admissao_candidato" required>
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Demissão</label>
                <input class="form-control form-control-sm" type="date" name="demissao_candidato" id="demissao_candidato">
            </div>
            <div class="col-12">
                <input type="text" name="local_unidade" id="local_unidade" class="form-control form-control-sm" placeholder="Local / Unidade" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="salario" id="salario" class="form-control form-control-sm" placeholder="Salário" required>
            </div>
            <div class="col-md-4">
                <input type="number" name="valor_vt" id="valor_vt" class="form-control form-control-sm" placeholder="Valor VT">
            </div>
            <div class="col-md-4">
                <input type="number" name="valor_vr" id="valor_vr" class="form-control form-control-sm" placeholder="Valor VR">
            </div>
            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="horario" id="horario" placeholder="Horário de trabalho" required>
            </div>
            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="frequencia" id="frequencia" placeholder="Frequência" required>
            </div>
            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="telefone" id="telefone" placeholder="Telefone">
            </div>
            <div class="col-md-6">
                <input class="form-control form-control-sm" type="text" name="celular" id="celular" placeholder="Celular">
            </div>
            <div class="col-12">
                <textarea name="observacao" id="observacao" cols="30" rows="3" class="form-control form-control-sm" placeholder="Observações"></textarea>
            </div>

            <h4>DOCUMENTOS</h4>

            <div class="col-md-3">
                <input type="text" name="rg" id="rg" class="form-control form-control-sm" placeholder="Numero do RG" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="cpf" id="cpf" class="form-control form-control-sm" placeholder="Numero do CPF" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="ctps" id="ctps" class="form-control form-control-sm" placeholder="Numero do CTPS">
            </div>
            <div class="col-md-3">
                <input type="text" name="serie" id="serie" class="form-control form-control-sm" placeholder="Numero do SÉRIE">
            </div>
            <div class="col-md-6">
                <label class="form-label col-form-label-sm">Número do PIS</label>
                <input type="text" name="pis" id="pis" class="form-control form-control-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label col-form-label-sm">Data de Nascimento</label>
                <input type="date" name="data_nasc" id="data_nasc" class="form-control form-control-sm" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="nome_pai" id="nome_pai" class="form-control form-control-sm" placeholder="Nomde do Pai">
            </div>
            <div class="col-md-6">
                <input type="text" name="nome_mae" id="nome_mae" class="form-control form-control-sm" placeholder="Nome da mãe">
            </div>

            <h4>ENDEREÇO</h4>

            <div class="col-12">
                <input type="text" name="endereco" id="endereco" class="form-control form-control-sm" placeholder="Rua / Logradouro / Numero" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="bairro" id="bairro" class="form-control form-control-sm" placeholder="Bairro">
            </div>
            <div class="col-md-6">
                <input type="text" name="cep" id="cep" class="form-control form-control-sm" placeholder="CEP">
            </div>
            <div class="col-md-6">
                <input type="text" name="cidade" id="cidade" class="form-control form-control-sm" placeholder="Cidade" required>
            </div>
            <div class="col-md-6">
                <input type="text" name="estado" id="estado" class="form-control form-control-sm" placeholder="Estado" required>
            </div>

            <h4>DADOS PARA SALARIO FAMILIA MENORES DE 14 ANOS</h4>

            <div class="col-md-4">
            <label class="form-label col-form-label-sm">Nomde do Filho</label>
                <input type="text" name="nome_filho1" id="nome_filho1" class="form-control form-control-sm" placeholder="Nome do Filho">
            </div>
            <div class="col-md-4">
            <label class="form-label col-form-label-sm">CPF</label>
                <input type="text" name="cpf_filho1" id="cpf_filho1" class="form-control form-control-sm" placeholder="CPF">
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Data de Nascimento</label>
                <input type="date" name="data_nasc_filho1" id="data_nasc_filho1" class="form-control form-control-sm">
            </div>
            <div class="col-md-4">
            <label class="form-label col-form-label-sm">Nomde do Filho</label>
                <input type="text" name="nome_filho2" id="nome_filho2" class="form-control form-control-sm" placeholder="Nome do Filho">
            </div>
            <div class="col-md-4">
            <label class="form-label col-form-label-sm">CPF</label>
                <input type="text" name="cpf_filho2" id="cpf_filho2" class="form-control form-control-sm" placeholder="CPF">
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Data de Nascimento</label>
                <input type="date" name="data_nasc_filho2" id="data_nasc_filho2" class="form-control form-control-sm">
            </div>

            <h4>DADOS BANCÁRIOS (ITAU / BRADESCO)</h4>

            <div class="col-md-3">
                <input type="text" name="nome_banco" id="nome_banco" class="form-control form-control-sm" placeholder="Banco" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="tipo_conta" id="tipo_conta" class="form-control form-control-sm" placeholder="Tipo de Conta: CORRENTE/POUPANÇA" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="agencia" id="agencia" class="form-control form-control-sm" placeholder="Agência" required>
            </div>
            <div class="col-md-3">
                <input type="text" name="numero_conta" id="numero_conta" class="form-control form-control-sm" placeholder="Número da Conta" required>
            </div>

            <h4>UNIFORMES</h4>

            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Tamanho Camisa</label>
                <select name="tam_camisa" id="tam_camisa" class="form-select form-select-sm" required>
                    <option value="cam_p">Pequena</option>
                    <option selected value="cam_m">Média</option>
                    <option value="cam_g">Grande</option>
                    <option value="cam_gg">GG</option>
                    <option value="cam_xl">XL</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Tamanho Calça</label>
                <select name="tam_calca" id="tam_calca" class="form-select form-select-sm" required>
                    <option value="calca_p">Pequena</option>
                    <option selected value="cam_m">Média</option>
                    <option value="calca_g">Grande</option>
                    <option value="calca_gg">GG</option>
                    <option value="calca_xl">XL</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label col-form-label-sm">Tamanho Sapato</label>
                <input type="number" name="tam_sapato" id="tam_sapato" class="form-control form-control-sm" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Salvar Cadastro</button>
            </div>
        </form>
    </div>

    
@endsection