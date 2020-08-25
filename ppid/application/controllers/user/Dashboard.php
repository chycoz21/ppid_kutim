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
			'info' => $this->m_kategori->getsaatini()->result_array(),
			'judul' => 'SETIAP SAAT',
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function berkala()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getberkala()->result_array(),
			'judul' => 'BERKALA',
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function serta_merta()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' =>  $this->m_kategori->getsertamerta()->result_array(),
			'judul' => 'SERTA MERTA',
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function dikecualikan()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getdikecualikan()->result_array(),
			'judul' => 'DIKECUALIKAN',
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
}
    