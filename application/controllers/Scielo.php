<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scielo extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
        
        public function inicio()
	{
		$this->load->view('pags/inicio');
	}
        
        public function admision()
	{
		$this->load->view('pags/admision');
	}
        
        public function admision_inmediata()
	{
		$this->load->view('pags/admision_inmediata');
	}
        
        public function control()
	{
		$this->load->view('pags/control');
	}
        
        public function empresas()
	{
		$this->load->view('pags/empresas');
	}
        
        public function envio()
	{
		$this->load->view('pags/envio');
	}
        
        public function evaluacion()
	{
		$this->load->view('pags/evaluacion');
	}
        
        public function informes()
	{
		$this->load->view('pags/informes');
	}
        
        public function manuales()
	{
		$this->load->view('pags/manuales');
	}
        
        public function criterios()
	{
		$this->load->view('pags/criterios');
	}
        
        public function criterios_js()
        {
            $this->load->view('js/criterios.js');
        }
        
        public function utils_js()
        {
            $this->load->view('js/utils.js');
        }
}
