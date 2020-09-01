<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "2") {
			redirect('beranda','refresh');
		   }
		$this->load->model('m_beranda');   
		$this->load->model('m_kategori');
	}
	

	public function index()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getsaatini()->result_array(),
			'judul' => 'SETIAP SAAT',
			'socmed' => $this->m_beranda->getmediasocial()->result_array(),
			'kontak' => $this->db->get('alamat')->result(),
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		
		
	}
	public function berkala()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getberkala()->result_array(),
			'judul' => 'BERKALA',
			'socmed' => $this->m_beranda->getmediasocial()->result_array(),
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		
	}
	public function serta_merta()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' =>  $this->m_kategori->getsertamerta()->result_array(),
			'judul' => 'SERTA MERTA',
			'socmed' => $this->m_beranda->getmediasocial()->result_array(),
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		
	}
	public function dikecualikan()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getdikecualikan()->result_array(),
			'judul' => 'DIKECUALIKAN',
			'socmed' => $this->m_beranda->getmediasocial()->result_array(),
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_index', $data, FALSE);
		
	}

	public function update_profile($id)
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'judul' => 'DIKECUALIKAN',
			'edit' => $this->m_data->get_profile($id),
			'profil' => $this->m_data->profile()
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_update_profile', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
	}

	public function simpan_edit($id)
	{
		$ktp    = time().$_FILES['ktp']['name'];
		if ($ktp ='') {
			
		}else {
			    $config ['upload_path'] = './assets/ktp/';
                $config ['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $ktp;
                $config['encrypt_name'] = TRUE;
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('ktp')) {
					echo 'gagal upload';
				}else{
					$ktp= $this->upload->data('file_name');
				}
		}
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan', true)),
            'notelp' => htmlspecialchars($this->input->post('notelp', true)),
     
        );

		$this->db->where('id', $id);
		$this->db->update('register_pemohon', $data);
		
		
      
        $pem = array(
        'ktp' => $ktp,
        );
		$this->db->where('id', $id);
		$this->db->update('permohonan_informasi', $pem);

		echo 'Fone';

	}

	public function daftar_permintaan()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'data' => $this->m_data->daftar_permintaan()
		
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_daftar_permintaan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
	}

	public function formulir()
	{
		$data = array(
			'title' => 'PPID | Dashboard',
			'permohon' => $this->m_data->permohon(),
			'info' => $this->m_kategori->getsaatini()->result_array(),
			'kontak' => $this->db->get('alamat')->result(),
			'profil' => $this->m_data->profile()
			
			
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/user/v_formulir_permintaan', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
	}

	public function acfp()
	{
	
       
        $pem = array(
        'id_register' => $this->session->userdata('id'),
        'rincian' => htmlspecialchars($this->input->post('rincian', true)),
        'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
        'memperoleh' => htmlspecialchars($this->input->post('memperoleh', true)),
        'mendapatkan' => htmlspecialchars($this->input->post('mendapatkan', true)),
        'status_permintaan' => 1,


        );

        $this->db->insert('permohonan_informasi', $pem);
        redirect('u/daftar');
	}

}
    