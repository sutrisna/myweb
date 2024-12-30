<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('dashboard/partials/header');
		$this->load->view('dashboard/contents/dashboard');
		$this->load->view('dashboard/partials/footer');
		$this->load->view('dashboard/js/global');
	}
}
