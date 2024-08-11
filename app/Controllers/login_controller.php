<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    // Mostrar formulario de login
    public function index() {
        $this->load->view('login');
    }

    // Procesar inicio de sesión
    public function autenticar() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $usuario = $this->Usuario_model->obtener_usuario_por_email($email);

        if ($usuario && password_verify($password, $usuario->password)) {
            // Sesión de usuario iniciada
            $this->session->set_userdata('usuario_id', $usuario->id);
            redirect('usuario_controller/listar');
        } else {
            // Autenticación fallida
            $this->session->set_flashdata('error', 'Correo o contraseña incorrectos');
            redirect('login_controller');
        }
    }

    // Cerrar sesión
    public function cerrar_sesion() {
        $this->session->unset_userdata('usuario_id');
        redirect('login_controller');
    }
}
