<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "2") {
			redirect('trial/landing','refresh');
		   }
	}
	

	public function index()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'profil' => $this->m_data->profile()
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
}
    