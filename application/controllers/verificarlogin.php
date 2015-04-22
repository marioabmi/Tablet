<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Verificarlogin extends CI_Controller {
 
 		function __construct()
 			{
   				parent::__construct();
          @ session_start();
   				$this->load->helper('url');
   				$this->load->model('login_model','',TRUE);
   				$this->load->helper('security');
 			}
 
 		function index()
 		{
   				//This method will have the credentials validation
   				$this->load->library('form_validation'); 
   				$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|xss_clean');
   				$this->form_validation->set_rules('clave', 'Clave', 'trim|required|xss_clean|callback_check_database');


   				$this->form_validation->set_message('required','El Campo <b>%s</b> Es Obligatorio');

 
   				if($this->form_validation->run() == FALSE)
   			{
     			//Field validation failed.  User redirected to login page
     			$this->load->view('hefo/head');
   				$this->load->view('login_views');
   				$this->load->view('hefo/footer');
   			}
   				else
   			{
     			//Go to private area
     			redirect('home', 'refresh');
   			}
 
 		}
 
 		function check_database($clave)
 		{
   				//Field validation succeeded.  Validate against database
   				$usuario = $this->input->post('usuario');
 
   				//query the database
   				$result = $this->login_model->login($usuario, $clave);
 
   				if($result)
   			{
     			$sess_array = array();
     			foreach($result as $row)
     		{
       $sess_array = array(
         'idUsuario' => $row->idUsuario,
         'usuario' => $row->usuario
         );
	      $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Usuario o Contraseña Invalidos');
     return false;
   }
 }
}
?>