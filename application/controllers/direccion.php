<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion extends CI_Controller {
	    public function __construct()
    {
        parent::__construct();        
        @ session_start();
          $this->load->helper('url');
          $this->load->library('pagination');
<<<<<<< HEAD
          $this->load->library(array('session','form_validation'));
          $this->load->model("producto_model");     
=======
          $this->load->model('model_carrito');
          $this->load->library(array('session','form_validation'));     
>>>>>>> origin/master
    }

	public function form()
			{
                if($this->session->userdata('logged_in'))
                  {
                    $session_data = $this->session->userdata('logged_in');
                    $data['usuario'] = $session_data['usuario'];
                    $data['carrito'] =$this->model_carrito->carrito();
                    $this->load->view('hefo/head', $data);     
                    $this->load->view('form/form', $data);
                    $this->load->view('hefo/footer', $data);
                  }
                else
                  {
                    //If no session, redirect to login page
                    redirect('login', 'refresh');
                  }
              }
  public function producto()
      {
                
                if($this->session->userdata('logged_in'))
                  {
                    $session_data = $this->session->userdata('logged_in');
                    $data['sucursal'] = $this->producto_model->sucur();
                    $data['cliente'] = $this->producto_model->cliente();
                    $data['usuario'] = $session_data['usuario'];
                    $this->load->view('hefo/head', $data);     
                    $this->load->view('form/a_producto', $data);
                    $this->load->view('hefo/footer', $data);
                  }
                else
                  {
                    //If no session, redirect to login page
                    redirect('login', 'refresh');
                  }
              }

 public function buscar(){

  $opciones = array();
  
  $consulta = new Consultas();
  
  if( $_POST[ "type" ] == 1)
  {
    
      $resultado = $consulta -> buscarLinkPorCoincidencia( $_POST[ "coincidencia" ] );
  }
  else
  {
    $resultado = $consulta -> buscarLinkPorCategoria( $_POST[ "valor" ] );
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
          <button class = 'btn btn-warning editar' id = '".$valor[ "id_link" ]."'>Editar</button><br><br>
          <button class = 'btn btn-danger eliminar' id = '".$valor[ "id_link" ]."'>Eliminar</button>
        </td>
        </tr>";
  }

 }



}