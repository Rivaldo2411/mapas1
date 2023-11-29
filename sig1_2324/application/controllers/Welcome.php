<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//reenderizar una pagina web//
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}


	public function universidad()
	{
		//reenderizar una pagina web//
		$this->load->view('header');
		$this->load->view('universidad');
		$this->load->view('footer');
	}


	public function ciudad()
	{
		//reenderizar una pagina web//
		$this->load->view('header');
		$this->load->view('ciudad');
		$this->load->view('footer');
	}

}//CIERRE DE LA CLASE
