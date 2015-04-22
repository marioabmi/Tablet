<?php 	
	class BuscarLinks extends CI_Controller{

		public function __construct() { 

		parent::__construct();

    }

     function index()
    {
        $this->load->model('producto_model');
        
    	$opciones = array();	
		$consulta = new producto_model();
	
	if( $_POST[ "type" ] == 1)
	{
		
		$resultado = $consulta->buscarLinkPorCoincidencia( $_POST[ "coincidencia" ] );
	}
	else
	{
		$resultado = $consulta->Categoria( $_POST[ "valor" ] );
	}
	
	foreach( $resultado as $valor )
	{
		echo "<tr class = 'info'>
				<td>".$valor[ "Codigo" ]."</td>
				<td>".$valor[ "Nombre" ]."</td>
				<td>".$valor[ "Descripcion" ]."</td>
				<td>".$valor[ "Existencias" ]."</td>
				<td>".$valor[ "Prc Mayoreo" ]."</td>
				<td>".$valor[ "Prc Preferencial" ]."</td>
				<td>".$valor[ "Equivalencia1" ]."</td>
				<td>".$valor[ "Equivalencia2" ]."</td>
				<td>
					<button class = 'btn btn-warning editar' id = ''>Editar</button><br><br>
					<button class = 'btn btn-danger eliminar' id = ''>Eliminar</button>
				</td>
			  </tr>";
	}

	}

}

?>