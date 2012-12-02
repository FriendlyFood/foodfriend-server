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