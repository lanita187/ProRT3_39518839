<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    // Nombre de la tabla asociada a este modelo
    protected $table = 'usuarios';
    
    // Clave primaria de la tabla
    protected $primaryKey = 'id';

    // Campos permitidos para inserción y actualización masiva
    protected $allowedFields = ['nombre', 'email', 'contraseña', 'creado_en', 'actualizado_en'];

    // Indica si las fechas de creación y actualización se manejarán automáticamente
    protected $useTimestamps = true;
    protected $createdField = 'creado_en';
    protected $updatedField = 'actualizado_en';

    // Reglas de validación (opcional)
    protected $validationRules = [
        'nombre' => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email',
        'contraseña' => 'required|min_length[8]'
    ];

    // Mensajes de validación (opcional)
    protected $validationMessages = [
        'nombre' => [
            'required' => 'El nombre es obligatorio.',
            'min_length' => 'El nombre debe tener al menos 3 caracteres.',
            'max_length' => 'El nombre no puede tener más de 255 caracteres.'
        ],
        'email' => [
            'required' => 'El email es obligatorio.',
            'valid_email' => 'Debes proporcionar un email válido.'
        ],
        'contraseña' => [
            'required' => 'La contraseña es obligatoria.',
            'min_length' => 'La contraseña debe tener al menos 8 caracteres.'
        ]
    ];
}

obtener_usuario_por_email

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Crear usuario
    public function agregar_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }

    // Obtener todos los usuarios
    public function obtener_usuarios() {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    // Obtener un usuario por ID
    public function obtener_usuario_por_id($id) {
        $query = $this->db->get_where('usuarios', array('id' => $id));
        return $query->row();
    }

    // Obtener un usuario por email
    public function obtener_usuario_por_email($email) {
        $query = $this->db->get_where('usuarios', array('email' => $email));
        return $query->row();
    }

    // Actualizar usuario
    public function actualizar_usuario($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
    }

    // Borrar usuario
    public function borrar_usuario($id) {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }
}
