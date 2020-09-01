<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_profile');
	}

	public function dasar_hukum()
	{
		$data = array(
			'title' => 'PPID | Dasar Hukum',
			'kontak' => $this->db->get('alamat')->result(),
			'gambar' => $this->db->get('dasar_hukum')->result(),
			'socmed' => $this->m_profile->getmediasocial()->result_array()
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/profile/dasar_hukum', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }

    public function profile_singkat()
	{
		$data = array(
			'title' => 'PPID | Profile Singkat',
			'kontak' => $this->db->get('alamat')->result(),
			'gambar' => $this->db->get('profil_singkat')->result(),
			'socmed' => $this->m_profile->getmediasocial()->result_array()
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/profile/profile_singkat', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }
    
    public function tugas()
	{
		$data = array(
			'title' => 'PPID | Tugas Fungsi dan Wewenang',
			'kontak' => $this->db->get('alamat')->result(),
			'gambar' => $this->db->get('tugas_fungsi')->result(),
			'socmed' => $this->m_profile->getmediasocial()->result_array()
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/profile/tugas', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }

    public function struktur()
	{
		$data = array(
			'title' => 'PPID | Struktur PPID',
			'kontak' => $this->db->get('alamat')->result(),
			'gambar' => $this->db->get('struktur_ppid')->result(),
			'socmed' => $this->m_profile->getmediasocial()->result_array()
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/profile/struktur', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }

    public function visi_misi()
	{
		$data = array(
			'title' => 'PPID | Visi & Misi PPID',
			'kontak' => $this->db->get('alamat')->result(),
			'listvisimisi' => $this->m_profile->getvisimisi()->result_array(),
			'socmed' => $this->m_profile->getmediasocial()->result_array()
		);
		$this->load->view('home/profile/visi_misi', $data, FALSE);
    }
}
