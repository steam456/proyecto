<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_controller{
	function __construct(){
		parent::__construct();
		$this->load->model('model');
		$this->load->helper("url");
	}

	function index(){
        $this->load->view('index');
	}





	function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');


        echo json_encode($this->model->login_usuario($email,$password));




	}


    function registrar(){
        $nombre = $this->input->post('nombre');
        $apellidos = $this->input->post('apellidos');
        $password = $this->input->post('pass-reg');
        $email = $this->input->post('email');


        $form = array(
           'correo'=> $email,
            'contraseña'=> $password,
            'nombre'=> $nombre,
            'apellido'=> $apellidos
        );




       if($this->model->registrar_usuario($form))
           echo json_encode(array("message"=>"Datos guardados correctamente"));
        else
            echo json_encode(array("message"=>"Ha ocurrido un problema al guardar"));

    }



	  /*function login(){
			 $usuario = $this->input->post('usuario');
			 $pass = $this->input->post('pass');
       $result= $this->login_model->ingresar($usuario);

      return $result;
		}*/










}// Fin de controlador
