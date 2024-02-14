<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');
        $this->load->library('javascript');
    }

    public function listar_array()
    {
        $this->load->model("ClientesModel", "clientes");

        $resultado = $this->clientes->listar_todos();

        echo '<pre>';

        var_dump($resultado);
    }

    public function listar_tabela()
    {
        $this->load->model("ClientesModel", "clientes");
        $resultado = $this->clientes->listar_todos();
        $dados = array("clientes" => $resultado);
        $this->load->view("clientes/lista_tabela", $dados);
        
    }

}