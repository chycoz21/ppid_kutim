<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Login extends CI_controller {

	public function index()
	{
		$this->load->view('v_login');
	}
	public function aksi(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()!=false){
			//menangkap data user dan pass
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$where=array(
					'user_usrnm' =>$username,
					'user_pass' =>md5($password),
					'user_status'=>1
				);
			$this->load->model('m_data');

			//cek kesusaian
			$cek=$this->m_data->cek_login('user',$where)->num_rows();
			//cek jika benar
			if($cek > 0){
					//ambil data user lakukan login
					$data=$this->m_data->cek_login('user',$where)->row();
					//buat session untuk berhasil
					$data_session = array(
									'id'=> $data->user_id,
									'username'=> $data->user_usrnm,
									'level' => $data->user_lvl,
									'status' => 'telah_login'
								);
					$this->session->set_userdata($data_session);

					//ke halaman dashboard
					redirect(base_url().'dashboard');
			}else{
				redirect(base_url().'login?alert=gagal');
			}
		}else{
			$this->load->view('v_login');
		}
	}
}

 ?>