<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class GuardarLinks extends CI_Controller{
		public function __construct()
    { 
		parent::__construct();
		@ session_start();
        $this->load->model("producto_model");
    }

    public function index(){

	$consulta = new producto_model();
	
	switch( $_POST[ "type" ] )
	{
		case 1:
		{
			$consulta -> guardarLink( $_POST[ "titulo" ] , $_POST[ "link" ] , $_POST[ "categoria" ] );
		}
		break;
		
		//Editar registro
		case 2:
		{
			$opciones = array();
			
			$resultado = $consulta -> buscarLinkPorID( $_POST[ "idSucursal" ] );
			
			foreach( $resultado as $valor )
			{
				$opciones[] = array( "idSucursal" => $valor[ 'idSucursal' ] , "nombre" => $valor[ "nombre" ] );
			}
			
			echo json_encode( $opciones );
		}
		break;
		
		case 3:
		{
			$consulta -> actualizarLink( $_POST[ "id" ] , $_POST[ "titulo" ] , $_POST[ "link" ] , $_POST[ "categoria" ] );
		}
		break;
		
		//eliminar registro
		case 4:
		{
			$consulta -> eliminarLinkPorID( $_POST[ "id" ] );
		}
		break;
	}

}
	
?>