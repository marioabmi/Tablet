<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

        class Home extends CI_Controller{
 
            function __construct()
              {
                parent::__construct();
                @ session_start();
                  $this->load->helper('url');
                  
              }
 
            function index()
              {
                if($this->session->userdata('logged_in'))
                  {
                    $session_data = $this->session->userdata('logged_in');
                    $data['usuario'] = $session_data['usuario'];
                    $this->load->view('hefo/head', $data);     
                    $this->load->view('inicio', $data);
                    $this->load->view('hefo/footer', $data);
                  }
                else
                  {
                    //If no session, redirect to login page
                    redirect('login', 'refresh');
                  }
              }
            function logout()
              {
                $this->session->unset_userdata('logged_in');
                session_destroy();
                redirect('home', 'refresh');
              }
        }
 
?>