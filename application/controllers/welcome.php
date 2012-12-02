<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->helper('url');
		$this->load->view('welcome_message');
	}
	
	function codigo()
	{
		$this->load->helper('url');
		$this->load->view('codigo');
	}
	
	function producto()
	{
		$this->load->helper('url');
		$this->load->view('producto');
	}
	
	function ficha()
	{
		$this->load->helper('url');
		$this->load->view('ficha');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */