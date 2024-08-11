<?php

namespace App\Controllers;

use App\Models\usuariosModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $usuarioModel = new usuariosModel();
        $data['usuarios'] = $usuarioModel->findAll();
        
        return view('usuarios/index', $data);
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
    }

    // Crear un nuevo usuario
    public function agregar() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
        );
        $this->Usuario_model->agregar_usuario($data);
        redirect('usuario/listar');
    }

    // Listar todos los usuarios
    public function listar() {
        $data['usuarios'] = $this->Usuario_model->obtener_usuarios();
        $this->load->view('listar_usuarios', $data);
    }

    // Mostrar el formulario de edición y actualizar el usuario
    public function editar($id) {
        $data['usuario'] = $this->Usuario_model->obtener_usuario_por_id($id);
        $this->load->view('editar_usuario', $data);
    }

    public function actualizar($id) {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
        );
        $this->Usuario_model->actualizar_usuario($id, $data);
        redirect('usuario/listar');
    }

    // Borrar usuario
    public function borrar($id) {
        $this->Usuario_model->borrar_usuario($id);
        redirect('usuario/listar');
    }
}