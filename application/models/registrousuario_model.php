<?php

class RegistroUsuario_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }


    function crearRegistro($data){
        $this->db->insert('registro',
        array('nombre' => $data['nombre'], 'apellido' => $data['apellido'], 'edad' => $data['edad']));

    }
}