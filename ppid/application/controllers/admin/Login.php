<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Login extends CI_controller {

	public function index()
	{
		$this->load->view('admin/v_login');
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
					// Insert Riwayat Login
					date_default_timezone_set('Asia/Jakarta');
					$data_riwayat = array(
						'username' => $data->user_usrnm,
						'ip' => $this->input->ip_address(),
						'sistem_oprasi' => $this->agent->platform(),
						'browser' => $this->agent->browser(),
						'tanggal_login' => date('d-m-Y'),
						'jam' => date('h:i:sa'),
						'level' => 1

					);
                    $this->db->insert('riwayat_login',$data_riwayat);
					//ke halaman dashboard

					// Ke Masing Masing halaman user
					if ($data->user_lvl == "1") {
						redirect(base_url().'admin/dashboard');
					}elseif ($data->user_lvl == "2") {
						redirect(base_url().'admin/dashboard_editor');
					}elseif ($data->user_lvl == "3") {
						redirect(base_url().'admin/dashboard_kontributor');
					}else{
                         echo 'Anda Siapa';
					}
			}else{
				redirect(base_url().'admin/login?alert=gagal');
			}
		}else{
			$this->load->view('admin/v_login');
		}
	}
}

 ?>