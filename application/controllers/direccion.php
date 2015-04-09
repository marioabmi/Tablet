<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Direccion extends CI_Controller {
	    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');     
    }   

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('hefo/head');
		$this->load->view('table');
		$this->load->view('hefo/footer');
	}

	public function table()
	{
		$this->load->view('hefo/head');
		$this->load->view('tablet');
		$this->load->view('hefo/footer');
	}


}