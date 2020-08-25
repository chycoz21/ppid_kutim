<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasi extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_regulasi');
	}

	public function list_regulasi()
	{
		$data = array(
			'title' => 'PPID | List regulasi',
			'listregulasi' => $this->m_regulasi->getregulasi()->result_array(),
			'kontak' => $this->db->get('alamat')->result()
		);
		$this->load->view('home/regulasi/list_regulasi', $data, FALSE);	
	}
}
?>	