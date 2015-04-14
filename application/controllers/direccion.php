<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion extends CI_Controller {
	    public function __construct()
    {
        parent::__construct();        
        @ session_start();
          $this->load->helper('url');
          $this->load->library('pagination');
          $this->load->library(array('session','form_validation'));     
    }

	public function form()
			{
                if($this->session->userdata('logged_in'))
                  {
                    $session_data = $this->session->userdata('logged_in');
                    $data['usuario'] = $session_data['usuario'];
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


}