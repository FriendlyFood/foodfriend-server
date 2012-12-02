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
		// $this->load->model('productos_model','productos');
	}
	/* */  
	function producto_get()
    {
        if(!$this->get('code'))
        {
        	$this->response(NULL, 400);
        }

        // $user = $this->productos->getProducto( $this->get('id') );
    	$users = array(
			6 => array('id' => 1, 'name' => 'Flag', 'calorias' => '10000', 'azucar' => 'rojo'),
			7 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
			8 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
			9 => array('nombre' => 'PAPAS LAYS CORTE AMERICANO', 'marca' => 'LAYS' , 'categoria' => 'SNACK' , 'indicador' => '3'),
			10 => array('nombre' => 'SNACK MIX LAYS', 'marca' => 'LAYS' , 'categoria' => 'SNACK' , 'indicador' => '2'),
		);
		
		$productos = array(
			1 => array('UNSPSC' => '7802000002557', 'nombre' => 'PAPAS LAYS CORTE AMERICANO', 'marca' => 'LAYS' , 'categoria' => 'SNACK' , 'indicador' => '3'),
			2 => array('UNSPSC' => '7802000007569', 'nombre' => 'SNACK MIX LAYS', 'marca' => 'LAYS' , 'categoria' => 'SNACK' , 'indicador' => '2'),
			3 => array('UNSPSC' => '7802215512285', 'nombre' => 'FRAC CHOCOLATE RELLENO VAINILLA', 'marca' => 'COSTA' , 'categoria' => 'GALLETAS' , 'indicador' => '1'),
			4 => array('UNSPSC' => '8480000107480', 'nombre' => 'LECHE SEMIDESCREMADA SURLAT', 'marca' => 'SURLAT' , 'categoria' => 'LECHES' , 'indicador' => '4')
		);
		
    	// $user = @$users[$this->get('code')];
    	$producto = @$productos[$this->get('code')];
    	// $producto = @$users[$this->get('code')];
    	
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
	
    function user_post()
    {
        //$this->some_model->updateUser( $this->get('id') );
        $message = array('id' => $this->get('id'), 'name' => $this->post('name'), 'email' => $this->post('email'), 'message' => 'ADDED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
    function user_delete()
    {
    	//$this->some_model->deletesomething( $this->get('id') );
        $message = array('id' => $this->get('id'), 'message' => 'DELETED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
    function users_get()
    {
        //$users = $this->some_model->getSomething( $this->get('limit') );
        $users = array(
			array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com'),
			array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => array('hobbies' => array('fartings', 'bikes'))),
		);
        
        if($users)
        {
            $this->response($users, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any users!'), 404);
        }
    }


	public function send_post()
	{
		var_dump($this->request->body);
	}


	public function send_put()
	{
		var_dump($this->put('foo'));
	}
}