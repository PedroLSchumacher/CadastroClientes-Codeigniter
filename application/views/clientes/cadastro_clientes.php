<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styleinsert.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
<div class="container">
<div class="card mt-5">
            <div class="card-header custom-header">
                <h2 class="card-title text-center">Cadastro de Clientes</h2>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('Cadastro/register'); ?>" method="post" id="form_cadastro_cliente">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome:</label>
                        <input class="form-control input_info" name="nome" id="nome" placeholder="Nome" type="text"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="sobrenome" class="form-label">Sobrenome:</label>
                        <input class="form-control input_info" name="sobrenome" id="sobrenome" placeholder="Sobrenome" type="text"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input class="form-control input_info" name="email" id="email" placeholder="E-mail do usuário" type="email"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="ddd" class="form-label">DDD:</label>
                        <input class="form-control input_info" name="ddd" id="ddd" placeholder="Ex: 051" type="number" maxlength="3" required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="tel_celular" class="form-label">Telefone Celular:</label>
                        <input class="form-control input_info" name="tel_celular" id="tel_celular" placeholder="Ex: 987654321" type="number" maxlength="9"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                        <input class="form-control input_info" name="data_nascimento" id="data_nascimento" type="date"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="est_civil" class="form-label">Estado Civil:</label>
                        <input class="form-control input_info" name="est_civil" id="est_civil" placeholder="Estado civil do cliente" type="text"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input class="form-control input_info" name="cpf" id="cpf" placeholder="Apenas dígitos numéricos (11)" type="tel" maxlength="11"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="rg" class="form-label">RG:</label>
                        <input class="form-control input_info" name="rg" id="rg" placeholder="Apenas dígitos numéricos (10)" type="tel" maxlength="10"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    <div class="mb-3">
                        <label for="emissao_rg" class="form-label">Data de emissão da identidade:</label>
                        <input class="form-control input_info" name="emissao_rg" id="emissao_rg" type="date"required>
                        <div class="invalid-feedback">Campo obrigatório</div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a href="<?php echo site_url('Clientes/listar_tabela'); ?>" class="btn btn-secondary">Listar Clientes</a>
                    </div>
                </form>
            </div>
</div>
<script>
    document.getElementById('form_cadastro_cliente').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Cliente cadastrado com sucesso!');
    this.submit();
    });
</script>
</div>
</body>
</html>