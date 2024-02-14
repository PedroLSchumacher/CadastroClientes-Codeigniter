<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js'); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
    <style>
        .custom-container {
    width: 100%;
    margin: 5px; /* centralizar horizontalmente */
     /* adicionar algum espaço interno */
    max-width: 1600px;

}
    </style>
</head>
<body>

    <div class="main">
        <div class="container custom-container">
            <div class="card mt-5">
                <div class="card-body">
                    <h1>Lista de Clientes</h1>
                        <div class="table-responsive mx-auto">
                            <table class="table table-striped text-center">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="<?php echo site_url('Cadastro/index'); ?>">
                                        <input class="btn btn-primary me-md-2" type="button" value="Cadastrar Cliente">
                                    </a>
                                </div> 
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Sobrenome</th>
                                            <th>E-mail</th>
                                            <th>DDD</th>
                                            <th>Telefone celular</th>
                                            <th>Data de Nascimento</th>
                                            <th>Estado Civil</th>
                                            <th>CPF</th>
                                            <th>RG</th>
                                            <th>Data emissão RG</th>
                                            <th>Status</th>
                                            <th>Ações</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($clientes as $p): ?>
                                            <tr>
                                                <td><?php echo $p->id; ?></td>
                                                <td><?php echo $p->nome; ?></td>
                                                <td><?php echo $p->sobrenome; ?></td>
                                                <td><?php echo $p->email; ?></td>
                                                <td><?php echo $p->ddd; ?></td>
                                                <td><?php echo $p->tel_celular; ?></td>
                                                <td><?php echo $p->data_nascimento; ?></td>
                                                <td><?php echo $p->est_civil; ?></td>
                                                <td><?php echo $p->cpf; ?></td>
                                                <td><?php echo $p->rg; ?></td>
                                                <td><?php echo $p->emissao_rg; ?></td>                               
                                                <td class="status">
                                                    <?php if ($p->status == 0): ?>
                                                        <img src="<?php echo base_url('assets/img/inativo.png'); ?>" alt="Inativo" class="status-image">
                                                    <?php elseif ($p->status == 1): ?>
                                                        <img src="<?php echo base_url('assets/img/ativo.png'); ?>" alt="Ativo" class="status-image">
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if ($p->status == 0): ?>
                                                        <input type="button" class="btn btn-outline-secondary btn-toggle-status" data-status="1" data-cliente="<?php echo $p->id; ?>" value="Ativar usuário">
                                                    <?php elseif ($p->status == 1): ?>
                                                        <input type="button" class="btn btn-outline-secondary btn-toggle-status" data-status="0" data-cliente="<?php echo $p->id; ?>" value="Desativar Usuário">
                                                    <?php endif; ?>
                                                </td>            
                                                <td><a href="<?php echo site_url('Cadastro/edit/'.$p->id); ?>"><button class="btn btn-outline-secondary">Editar</button></a></td>
                                                <input type="hidden" class="status-atual" value="<?php echo $p->status; ?>">
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>      
                            </table>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    <script>
    $(document).ready(function() {
    $(".btn-toggle-status").click(function() {
        var cliente_id = $(this).data('cliente');
        var novo_status = $(this).data('status');
        var status_atual = $(this).closest('tr').find(".status-atual").val();
        var confirmacao;

        if (novo_status == 1 && status_atual == 0) {
            confirmacao = confirm("Tem certeza que deseja ativar este usuário?");
        } else if (novo_status == 0 && status_atual == 1) {
            confirmacao = confirm("Tem certeza que deseja desativar este usuário?");
        }
        if (confirmacao) {
            $.post("<?php echo site_url('Cadastro/update_status'); ?>", { cliente_id: cliente_id, novo_status: novo_status })
                .done(function(data) {
                    if (novo_status == 1) {
                        $(this).val("Desativar conta");
                        $(this).closest('tr').find(".status").html('<img src="<?php echo base_url('assets/img/ativo.png'); ?>" alt="Ativo" class="status-image">');
                    } else {
                        $(this).val("Ativar conta");
                        $(this).closest('tr').find(".status").html('<img src="<?php echo base_url('assets/img/inativo.png'); ?>" alt="Inativo" class="status-image">');
                    }
                    $(this).closest('tr').find(".status-atual").val(novo_status);
                    
                    window.location.reload();
                })
                .fail(function() {
                    alert("Ocorreu um erro ao atualizar o status do cliente.");
                });
                }
            });
        });
    </script>  
</body>
</html>