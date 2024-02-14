<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styleedit.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('./assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('./assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('./assets/js/scripts.js'); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de Cliente</title>
</head>
<body>
<div class="container">
<div class="card mt-5">
            <div class="card-header custom-header">
                <h2 class="card-title text-center">Edição de Cliente</h2>
            </div>
                <div class="card-body">
                    <form action="<?php echo site_url('Cadastro/update/'.$cliente->id); ?>" method="post" id="form_edicao_cliente">
                        <div class="mb-3">
                            <label class="form-label" for="nome">Nome:</label>
                            <input class="form-control input_info" type="text" id="nome" name="nome" value="<?php echo $cliente->nome; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sobrenome">Sobrenome:</label>
                            <input class="form-control input_info" type="text" id="sobrenome" name="sobrenome" value="<?php echo $cliente->sobrenome; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">E-mail:</label>
                            <input class="form-control input_info" type="email" id="email" name="email" value="<?php echo $cliente->email; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ddd">DDD:</label>
                            <input class="form-control input_info" type="number" id="ddd" name="ddd" value="<?php echo $cliente->ddd; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="tel_celular">Telefone Celular:</label>
                            <input class="form-control input_info" type="tel" maxlength="9" id="tel_celular" name="tel_celular" value="<?php echo $cliente->tel_celular; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="data_nascimento">Data de Nascimento:</label>
                            <input class="form-control input_info" type="date" id="data_nascimento" name="data_nascimento" value="<?php echo $cliente->data_nascimento; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="est_civil">Estado Civil:</label>
                            <input class="form-control input_info" type="text" id="est_civil" name="est_civil" value="<?php echo $cliente->est_civil; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="cpf">CPF:</label>
                            <input class="form-control input_info" type="text" maxlength="11" id="cpf" name="cpf" value="<?php echo $cliente->cpf; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="rg" class="form-label">RG:</label>
                            <input class="form-control input_info" type="text" maxlength="10" id="rg" name="rg" value="<?php echo $cliente->rg; ?>"required><br>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="emissao_rg">Data de emissão da identidade:</label>
                            <input class="form-control input_info" type="date" id="emissao_rg" name="emissao_rg" value="<?php echo $cliente->emissao_rg; ?>"required><br>
                        </div>
                    
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <a href="<?php echo site_url('Clientes/listar_tabela'); ?>" class="btn btn-secondary">Listar Clientes</a>
                        </div>
                </form>
            </div>
</div>
<script>
    document.getElementById('form_edicao_cliente').addEventListener('submit', function(event) {
        event.preventDefault();
            alert('Alterações salvas com sucesso!');
                this.submit();
});
</script>
</div>
</body>
</html>