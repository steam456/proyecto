<?php

class Model extends CI_model{

	function __construct(){

		parent::__construct();
		$this->load->database();
	}



    function login_usuario($email,$password){
        $this->db->select("correo,contraseña,nombre_usuario");
        $this->db->from("usuarios");
        $this->db->where('correo',$email);
        $this->db->where('contraseña',$password);
        $query = $this->db->get();



        return $query->result();
    }



    function registrar_usuario($form){

        $this->db->insert('usuarios',$form);
        return $this->db->insert_id();
    }






}/*Fin del model*/
