<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('hefo/head');
   $this->load->view('login_views');
   $this->load->view('hefo/footers');
 }
 
}
 
?>