<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Layananio extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_layanan');
	}

	public function alur_permohonan()
	{
		$data = array(
			'title' => 'PPID | Alur',
			'kontak' => $this->db->get('alamat')->result(),
			'socmed' => $this->m_layanan->getmediasocial()->result_array()
		);
		$this->load->view('home/layananio/alur_permohonan', $data, FALSE);
		
	}
	public function cek_permohonan()
	{
		$data = array(
			'title' => 'PPID | Status',
			'kontak' => $this->db->get('alamat')->result(),
			'socmed' => $this->m_layanan->getmediasocial()->result_array()
		);
		$this->load->view('home/layananio/cek_permohonan', $data, FALSE);
		
	}
	public function ringkasan_permohonan()
	{
		$data = array(
			'title' => 'PPID | Ringkasan',
			'listringkasanlayanan' => $this->m_layanan->getringkasanlayanan()->result_array(),
			'kontak' => $this->db->get('alamat')->result(),
			'socmed' => $this->m_layanan->getmediasocial()->result_array()
		);
		$this->load->view('home/layananio/ringkasan_permohonan', $data, FALSE);
		
	}


}
?>	