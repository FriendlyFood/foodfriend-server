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

class Objects extends REST_Controller
{
	
    function user_post()
    {
        //$this->some_model->updateUser( $this->get('id') );
        $indicador = array('idIndicador' => $this->post('idIndicador'),
		'Fecha' => $this->post('Fecha'), 
		'Grasa' => $this->post('Grasa'), 
		'GrasaSaturada' => $this->post('GrasaSaturada'), 
		'HdeC' => $this->post('HdeC'), 
		'Sodio' => $this->post('Sodio'), 
		'Kcal' => $this->post('Kcal'), 
		'idProducto' => $this->get('idProducto'), 
		'message' => 'ADDED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }

	
    function producto_post()
    {
        //$this->some_model->updateUser( $this->get('id') );
        $producto = array('idProducto' => $this->get('idProducto'), 
		'NombreProducto' => $this->post('NombreProducto'), 
		'idMarca' => $this->post('idMarca'), 
		'codUNSPSC' => $this->post('codUNSPSC'), 
		'idCategoria' => $this->post('idCategoria'), 
		'idIndicador' => $this->post('idIndicador'),
		/** 
		'Fecha' => $this->post('Fecha'), 
		'Grasa' => $this->post('Grasa'), 
		'GrasaSaturada' => $this->post('GrasaSaturada'), 
		'HdeC' => $this->post('HdeC'), 
		'Sodio' => $this->post('Sodio'), 
		'Kcal' => $this->post('Kcal'), 
		**/
		'message' => 'ADDED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
 
}