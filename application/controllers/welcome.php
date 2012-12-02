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
		if(isset($_POST['word']))
		{
			$data['search'] = $_POST['word'];
		} else if(isset($_POST['codigo']))
		{
			$data['search'] = $_POST['codigo'];
		} else
		{
			$data['search'] = 0;
		}
		$this->load->helper('url');
		$this->load->view('ficha',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */