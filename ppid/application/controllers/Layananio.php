<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Layananio extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
	}

	public function alur_permohonan()
	{
		$data = array(
			'title' => 'PPID | Alur',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/layananio/alur_permohonan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function cek_permohonan()
	{
		$data = array(
			'title' => 'PPID | Status',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/layananio/cek_permohonan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}
	public function ringkasan_permohonan()
	{
		$data = array(
			'title' => 'PPID | Ringkasan',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/layananio/ringkasan_permohonan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
		
	}


}
?>	