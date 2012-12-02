<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Search extends REST_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('producto_model','mproductos');
	}
	/* */  
	function producto_get()
    {
        if(!$this->get('code')&&!$this->get('word'))
        {
        	$this->response(NULL, 400);
        }

        if($this->get('code'))
        {

            $producto = $this->mproductos->get_product_bycode( $this->get('code') );

        } else if($this->get('word'))
        {

            $producto = $this->mproductos->get_product_byword( $this->get('word') );

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
	    	
        if($producto)
        {
            $this->response($producto, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Barcode could not be found'), 404);
        }
    }
    /* */
    
}