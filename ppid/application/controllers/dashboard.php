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
	}

	public function index(){
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_index');
		$this->load->view('dashboard/v_footer');
	}

	public function keluar(){
		$this->session->sess_destroy();
		redirect('login?alert=logout');
	}
	public function ganti_password(){
		$this->load->view('dashboard/v_header');
		$this->load->view('dashboard/v_ganti_password');
		$this->load->view('dashboard/v_footer');
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
				redirect('dashboard/ganti_password?alert=sukses');
			}else{
				//alihkan halaman kembali ke ganti password
				redirect('dashboard/ganti_password?alert=gagal');
			}
		}else{
				$this->load->view('dashboard/v_header');
				$this->load->view('dashboard/v_ganti_password');
				$this->load->view('dashboard/v_footer');	
		}
	}
}



 ?>