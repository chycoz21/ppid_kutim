<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
       

    }
    


	public function login()
	{
        if ($this->session->userdata('email')) {
            redirect('u/dashboard');
        }
        $data = array(
			'title' => 'PPID | Login',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/auth/login', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }

    public function registrasi()
	{
        $data = array(
			'title' => 'PPID | Registrasi',
		);
		$this->load->view('home/v_header', $data, FALSE);
		$this->load->view('home/auth/registrasi', $data, FALSE);
		$this->load->view('home/v_footer', $data, FALSE);
    }
    
    public function registrasi_simpan()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

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
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'status' => 1
        );

        $this->db->insert('register_pemohon', $data);
        $id = $this->db->insert_id();
        $pem = array(
        'id_register' => $id,
        'rincian' => htmlspecialchars($this->input->post('rincian', true)),
        'tujuan' => htmlspecialchars($this->input->post('tujuan', true)),
        'memperoleh' => htmlspecialchars($this->input->post('memperoleh', true)),
        'mendapatkan' => htmlspecialchars($this->input->post('mendapatkan', true)),
        'ktp' => $ktp,
        'status' => 1,


        );

        $this->db->insert('permohonan_informasi', $pem);
        redirect('m/login');
        
    }

    public function login_ac()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('register_pemohon', ['email' => $email])->row_array();
        if ($user) {
            if ($user['status'] == 2) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id' => $user['id'],
                        'status' => $user['status']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['status'] == 2) {
                        redirect('u/dashboard');
                    } else {
                        redirect('m/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                    redirect('m/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Anda Belum Aktif!</div>');
                redirect('m/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Terdaftar!</div>');
            redirect('m/login');
        }
    }


    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('id');

        
        redirect('Beranda');
        
    }

}
