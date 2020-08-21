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

	public function page()
	{
		$data['page'] = $this->db->get('page')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/page/v_index',$data);


	}


	public function tambah_page()
	{
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/page/v_tambah_page');
		$this->load->view('admin/dashboard/v_footer');
	}


	function page_detail($id)
	{
    	$data['page_detail'] = $this->m_page->page_detail($id);
		$this->load->view('admin/page/v_detail_page',$data);

	}




	  
	function simpan(){
        $judul = $this->input->post('judul',TRUE);
        $deskripsi = $this->input->post('deskripsi',TRUE);
        $this->m_page->insert_post($judul,$deskripsi);
        $id = $this->db->insert_id();
        $result = $this->m_page->get_article_by_id($id)->row_array();
        $data['judul'] = $result['judul'];
        $data['deskripsi'] = $result['deskripsi'];
        $this->load->view('admin/page/v_post_detail', $data);
    }
 
    function upload_image(){
        if(isset($_FILES["image"]["name"])){
            $config['upload_path'] = './assets/admin/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $this->upload->display_errors();
                return FALSE;
            }else{
                $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/admin/images/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/admin/images/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'assets/admin/images/'.$data['file_name'];
            }
        }
    }
 
    //Delete image summernote
    function delete_image(){
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if(unlink($file_name))
        {
            echo 'File Delete Successfully';
        }
	}
	

	public function page_edit($id)
	{
		$data['page_edit'] = $this->m_page->page_detail($id);
		
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/page/v_edit_page',$data);
		$this->load->view('admin/dashboard/v_footer');
	}
	public function page_hapus($id)
	{
		
		$this->db->where('id', $id);	
		$this->db->delete('page');
		redirect('admin/dashboard/page');
		
		
	}

	function simpan_edit($id){
        $judul = $this->input->post('judul',TRUE);
		$deskripsi = $this->input->post('deskripsi',TRUE);
		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi
		);
		
		
		$this->db->where('id', $id);

		$this->db->update('page', $data);
		redirect('admin/dashboard/page');
		
        
    }
}
?>