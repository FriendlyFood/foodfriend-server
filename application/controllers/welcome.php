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
        if($_POST['codigo']))
        {

            $producto = $this->mproductos->get_product_bycode( $_POST['codigo'] );

        } else if($_POST['word'])
        {

            $producto = $this->mproductos->get_product_byword( $_POST['word'] );

        }
		
		//Parametros del estado
		
		if($producto['Grasa']<=3)
		{
			$producto['GrasaFlag'] = 0;
		}
		else if ($producto['Grasa']>3&&$producto['Grasa']<20)
		{
			$producto['GrasaFlag'] = 1;
		}
		else if ($producto['Grasa']>=20)
		{
			$producto['GrasaFlag'] = 2;
		}		
		
		if($producto['GrasaSaturada']<=1.5)
		{
			$producto['GrasaSaturadaFlag'] = 0;
		}
		else if ($producto['GrasaSaturada']>1.5&&$producto['GrasaSaturada']<5)
		{
			$producto['GrasaSaturadaFlag'] = 1;
		}
		else if ($producto['GrasaSaturada']>=5)
		{
			$producto['GrasaSaturadaFlag'] = 2;
		}	

		if($producto['HdeC']<=5)
		{
			$producto['HdeCFlag'] = 0;
		}
		else if ($producto['HdeC']>5&&$producto['HdeC']<12.5)
		{
			$producto['HdeCFlag'] = 1;
		}
		else if ($producto['HdeC']>=12.5)
		{
			$producto['HdeCFlag'] = 2;
		}		
		
		if($producto['Sodio']<=150)
		{
			$producto['SodioFlag'] = 0;
		}
		else if ($producto['Sodio']>150&&$producto['Sodio']<300)
		{
			$producto['SodioFlag'] = 1;
		}
		else if ($producto['Sodio']>=300)
		{
			$producto['SodioFlag'] = 2;
		}
		
		//Analisis de calorias
		
		if($producto['Kcal']<=25.2)
		{
			$producto['KcalFlag'] = 0;
		}
		else
		{
			$producto['KcalFlag'] = 2;
		}
		$this->load->helper('url');
		
		$data['producto'] = $producto;
		$this->load->view('ficha',$data);
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */