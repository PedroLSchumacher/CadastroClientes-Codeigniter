<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edicao extends CI_Controller {
    public function index()
    {
        $this->load->view("clientes/edicao_clientes");
        $this->load->helper('url');
        $this->load->library('javascript');
    }
    


}