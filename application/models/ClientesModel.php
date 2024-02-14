<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientesModel extends CI_Model {

    public function listar_todos()
    {
        $this->db->select("*");
        $this->db->from("clientes");
        $resultado = $this->db->get()->result();
        return $resultado;
    }

    public function editar_cadastro($id)
    {
        return $this->db->get_where("clientes", array(
            "id" => $id
        ))->row();
    }

    public function update_cliente($id, $data)
    {
    // Define a condição para atualizar o cliente com base no ID
    $this->db->where('id', $id);
    
   
    if ($this->db->update('clientes', $data)) {
        return true; // Retorna true se a atualização for bem-sucedida
    } else {
        return false; // Retorna false se houver um erro na atualização
    }
    }

    public function register($data)
    {

        $data['status'] = 1;
        return $this->db->insert('clientes', $data);
    }

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function atualizar_status($cliente_id, $novo_status) {
        $this->db->where('id', $cliente_id);
        return $this->db->update('clientes', array('status' => $novo_status));
    }
}