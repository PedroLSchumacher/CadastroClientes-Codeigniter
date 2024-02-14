<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
    public function index($indice=null)
    {
        $this->load->view("clientes/cadastro_clientes");
        $this->load->helper('url');
        $this->load->library('javascript');
    }

    public function register()
    {
    $data['nome'] = $this->input->post('nome');
    $data['sobrenome'] = $this->input->post('sobrenome');
    $data['email'] = $this->input->post('email');
    $data['ddd'] = $this->input->post('ddd');
    $data['tel_celular'] = $this->input->post('tel_celular');
    $data['data_nascimento'] = $this->input->post('data_nascimento');
    $data['est_civil'] = $this->input->post('est_civil');
    $data['cpf'] = $this->input->post('cpf');
    $data['rg'] = $this->input->post('rg');
    $data['emissao_rg'] = $this->input->post('emissao_rg');
    

    $data['status'] = 1;

    if($this->db->insert('clientes', $data)){
        redirect('Clientes/listar_tabela/1');
    }
    }

    public function edit($id)
    {
        
        $this->load->model("ClientesModel");
        $data['cliente'] = $this->ClientesModel->editar_cadastro($id);
        $data['title'] = "Edição de usuário";

        $this->load->view("clientes/edicao_clientes", $data);
        $this->load->helper('url');
        $this->load->library('javascript');         
    }

    public function update($id)
    {
        $this->load->model("ClientesModel");

        $data['nome'] = $this->input->post('nome');
        $data['sobrenome'] = $this->input->post('sobrenome');
        $data['email'] = $this->input->post('email');
        $data['ddd'] = $this->input->post('ddd');
        $data['tel_celular'] = $this->input->post('tel_celular');
        $data['data_nascimento'] = $this->input->post('data_nascimento');
        $data['est_civil'] = $this->input->post('est_civil');
        $data['cpf'] = $this->input->post('cpf');
        $data['rg'] = $this->input->post('rg');
        $data['emissao_rg'] = $this->input->post('emissao_rg');

        if($this->ClientesModel->update_cliente($id, $data)){
            redirect('Clientes/listar_tabela');
        } else {
            echo "Erro ao atualizar o cliente.";
        }
    }

    public function update_status() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $cliente_id = $this->input->post('cliente_id');
            $novo_status = $this->input->post('novo_status');

            $this->load->model('ClientesModel');

            if ($this->ClientesModel->atualizar_status($cliente_id, $novo_status)) {
                redirect('Clientes/listar_tabela');
            } else {
                show_error('Ocorreu um erro ao atualizar o status do cliente.');
            }
        } else {
            show_error('Método de requisição inválido.');
        }
    }
}