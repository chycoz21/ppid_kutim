<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_controller {

	function __construct(){
		parent::__construct();
		//cek login
		//jika status tida sama dengan session telah login,berarti pengguna belum login maka halaman akan kembali
		if($this->session->userdata('status')!="telah_login"){
			redirect(base_url().'login?alert=belum_login');
		}
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/dashboard/v_index');
		$this->load->view('admin/dashboard/v_footer');
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('admin/login?alert=logout');
	}
	public function ganti_password(){
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/ganti_password/v_ganti_password');
		$this->load->view('admin/dashboard/v_footer');
	}
	public function ganti_password_aksi(){
		//validasi
		$this->form_validation->set_rules('password_lama','Password_lama','required');
		$this->form_validation->set_rules('password_baru','Password_baru','required|min_length[8]');
		$this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password Baru','required|matches[password_baru]');

		//cek validasi
		if($this->form_validation->run()!=false){
			//menangkap data dri form
			$password_lama=$this->input->post('password_lama');
			$password_baru=$this->input->post('password_baru');
			$konfirmasi_password=$this->input->post('konfirmasi_password');
			//cek kessuaian password
			$where=array(
					'user_id'=>$this->session->userdata('id'),
					'user_pass'=>md5($password_lama));
			$cek=$this->m_data->cek_login('user',$where)->num_rows();
			//cek kesesusain pass lama
			if($cek > 0){
				//update data password usr
				$w=array(
					'user_id'=>$this->session->userdata('id'));
				$data=array(
						'user_pass'=>md5($password_baru));
				$this->m_data->update_data($where,$data,'user');
				//alihkan ke halaman kembali
				redirect('admin/dashboard/ganti_password?alert=sukses');
			}else{
				//alihkan halaman kembali ke ganti password
				redirect('admin/dashboard/ganti_password?alert=gagal');
			}
		}else{
				$this->load->view('admin/dashboard/v_header');
				$this->load->view('admin/ganti_password/v_ganti_password');
				$this->load->view('admin/dashboard/v_footer');	
		}
	}

	public function kategori()
	{
		$data = array(
			'title' => 'kategori',
			'subtitle' => 'Data Kategori',
			'listdatakategori' => $this->m_data->getkategori()->result_array()

		);
		$this->load->view('admin/kategori/v_index', $data);
	}

	public function tambah_kategori()
	{
		$data = array(
			'subtitle' => 'Tambah Kategori',
			'nama_kategori' => '',
			'icon' => ''
		);
		$this->load->view('admin/kategori/v_tambah_data', $data);
	}

	public function edit_kategori($id_kategori = '')
	{
		$kategori = $this->m_data->getkategori("WHERE id_kategori='$id_kategori' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Kategori',
			'id_kategori' => $kategori[0]['id_kategori'],
			'nama_kategori' => $kategori[0]['nama_kategori'],
			'icon' => $kategori[0]['icon']
		);
		$this->load->view('admin/kategori/v_edit_data', $data);
	}

	public function actionkategori()
	{
		$nm_kategori = $this->input->post('nama_kategori', TRUE);
		$icn_kategori = $this->input->post('icon_kategori', TRUE);
		$statusdata = $this->input->post('statusdata', TRUE);
		if($statusdata == "Tambah Data")
		{
			$data = array(
				'nama_kategori' => $nm_kategori,
				'icon' => $icn_kategori
			);
			$this->m_data->InsertData('kategori',$data);
			$this->session->set_flashdata('berhasil', 'Berhasil Tambah Kategori');
			redirect(base_url('admin/dashboard/kategori'), 'refresh');
		}
		if($statusdata == "Update Data")
		{
			$id_kategori = $this->input->post('id_kategori', TRUE);
			$data = array(
				'nama_kategori' => $nm_kategori,
				'icon' => $icn_kategori
			);
			$this->m_data->UpdateData('kategori', $data, array('id_kategori' => $id_kategori));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Kategori');
			redirect(base_url('admin/dashboard/kategori'), 'refresh');
		}
		if($statusdata == "Hapus Data")
		{
			$id_kategori = $this->input->post('id_kategori', TRUE);
			$this->m_data->HapusData('kategori', array('id_kategori' => $id_kategori));
			$this->session->set_flashdata('berhasil', 'Berhasil Hapus Kategori');
			redirect(base_url('admin/dashboard/kategori'), 'refresh');
		}
	}

	public function artikel()
	{
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/artikel/v_index');
		$this->load->view('admin/dashboard/v_footer');
	}
}
?>