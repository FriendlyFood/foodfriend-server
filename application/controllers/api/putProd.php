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
        if(!$this->get('code'))
        {
        	$this->response(NULL, 400);
        }

        $producto = $this->mproductos->get_product( $this->get('code') );
		
		/*$datos = $this->db->query('SELECT p.codUNSPSC AS CodigoDeBarra, p.NombreProducto, m.Nombre AS Marca, c.Nombre AS Categoria, i.Kcal AS Calorias, i.grasa AS GrasaTotal, i.grasasaturada AS GrasaSaturada, i.HdeC AS HidratosC, i.Sodio AS Sodio
FROM  `tbproducto` p
INNER JOIN tbMarca m ON ( m.idMarca = p.idMarca ) 
INNER JOIN tbCategoria c ON ( c.idCategoria = p.idCategoria ) 
INNER JOIN tbIndicador i ON ( i.idIndicador = p.idIndicador ) 
WHERE (
p.idIndicador >0
)');*/
	    	
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
    
    function inte()
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