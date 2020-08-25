<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Standart_layanan extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_standart_layanan');
	}

	public function Hak_dan_kewajiban_pemohon_informasi()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listhakkewajiban' => $this->m_standart_layanan->gethakkewajiban()->result_array()
			
		);
		$this->load->view('home/standart_layanan/v_hak_kewajiban', $data);
	}

	public function Hak_dan_kewajiban_bawaslu_dalam_pelayanan_informasi()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listhakkewajibanpelayanan' => $this->m_standart_layanan->gethakkewajibanpelayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_hak_kewajiban_pelayanan', $data);
	}

	public function Maklumat_pelayanan()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listmaklumatpelayanan' => $this->m_standart_layanan->getmaklumatpelayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_maklumat_pelayanan', $data);
	}

	public function Prosedur_pelayanan_informasi()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listprosedurpelayananinformasi' => $this->m_standart_layanan->getprosedurpelayananinformasi()->result_array()
		);
		$this->load->view('home/standart_layanan/v_prosedur_pelayanan_informasi', $data);
	}

	public function Prosedur_pengajuan_keberatan()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listprosedurpengajuankeberatan' => $this->m_standart_layanan->getprosedurpengajuankeberatan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_prosedur_pengajuan_keberatan', $data);
	}

	public function Prosedur_permohonan_penyelesaian_sengketa_informasi()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listprosedurpermohonansengketa' => $this->m_standart_layanan->getprosedurpermohonansengketa()->result_array()
		);
		$this->load->view('home/standart_layanan/v_permohonan_sengketa', $data);
	}

	public function Waktu_layanan()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listwaktulayanan' => $this->m_standart_layanan->getwaktulayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_waktu_layanan', $data);
	}

	public function Biaya_layanan()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM',
				'kontak' => $this->db->get('alamat')->result(),
			'listbiayalayanan' => $this->m_standart_layanan->getbiayalayanan()->result_array()
		);
		$this->load->view('home/standart_layanan/v_biaya_layanan', $data);
	}
}	
?>