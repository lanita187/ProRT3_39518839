<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('User_model');
    }

    public function index() {
        $this->form_validation->set_rules('username', 'Nombre de Usuario', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Correo Electrónico', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Contraseña', 'required');
        $this->form_validation->set_rules('password_confirm', 'Confirmar Contraseña', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this
