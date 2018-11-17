<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroUsuario extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('multi');
        $this->load->model('RegistroUsuario_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $MenuValues = array( 'Home', 'Nosotras', 'Contactanos', 'Ubicación');
        $menu = $this->load->library('menu', $MenuValues);
        $data['mi_menu'] = $this->menu->construirMenu();
        $this->load->view('registro_usuario/headers');
        $this->load->view('registro_usuario/bienvenido',$data);
    }

    public function store()
    {
        $MenuValues = array( 'Home', 'Nosotras', 'Contactanos', 'Ubicación');
        $menu = $this->load->library('menu', $MenuValues);
        $data['mi_menu'] = $this->menu->construirMenu();
        $data_insert = array(
            'nombre' => $this->input->post('nombre'),
            'apellido' => $this->input->post('apellido'),
            'edad' => $this->input->post('edad')
        );
        $this->RegistroUsuario_model->crearRegistro($data_insert);
        $this->load->view('registro_usuario/headers');
        $this->load->view('registro_usuario/bienvenido',$data);
    }
}
