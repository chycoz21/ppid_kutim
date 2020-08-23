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

	public function kategori_informasi()
	{
		$data = array(
			'title' => 'kategori Informasi',
			'subtitle' => 'Data Kategori Informasi',
			'listkategoriinformasi' => $this->m_data->getkategoriinformasi()->result_array()

		);
		$this->load->view('admin/kategori_informasi/v_index', $data);
	}

	public function tambah_kategori_informasi()
	{
		$data = array(
			'subtitle' => 'Tambah Kategori Informasi',
			'nama_kategori' => '',
			'icon' => ''
		);
		$this->load->view('admin/kategori_informasi/v_tambah_data', $data);
	}

	public function edit_kategori_informasi($id_kategori = '')
	{
		$kategori = $this->m_data->getkategoriinformasi("WHERE id_kategori='$id_kategori' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Kategori',
			'id_kategori' => $kategori[0]['id_kategori'],
			'nama_kategori' => $kategori[0]['nama_kategori'],
			'icon' => $kategori[0]['icon']
		);
		$this->load->view('admin/kategori_informasi/v_edit_data', $data);
	}

	public function actionkategoriinformasi()
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
			$this->session->set_flashdata('berhasil', 'Berhasil Tambah Kategori Informasi');
			redirect(base_url('admin/dashboard/kategori_informasi'), 'refresh');
		}
		if($statusdata == "Update Data")
		{
			$id_kategori = $this->input->post('id_kategori', TRUE);
			$data = array(
				'nama_kategori' => $nm_kategori,
				'icon' => $icn_kategori
			);
			$this->m_data->UpdateData('kategori', $data, array('id_kategori' => $id_kategori));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Kategori Informasi');
			redirect(base_url('admin/dashboard/kategori_informasi'), 'refresh');
		}
		if($statusdata == "Hapus Data")
		{
			$id_kategori = $this->input->post('id_kategori', TRUE);
			$this->m_data->HapusData('kategori', array('id_kategori' => $id_kategori));
			$this->session->set_flashdata('berhasil', 'Berhasil Hapus Kategori Informasi');
			redirect(base_url('admin/dashboard/kategori_informasi'), 'refresh');
		}
	}

	public function daftar_informasi()
	{
		$data = array(
			'title' => 'Daftar Informasi',
			'subtitle' => 'Data Daftar Informasi',
			'listdaftarinformasi' => $this->m_data->getdaftarinformasi()->result_array()

		);
		$this->load->view('admin/daftar_informasi/v_index', $data);
	}

	public function tambah_daftar_informasi()
	{
		$data = array(
			'subtitle' => 'Tambah Daftar Informasi',
			'nama_file' => '',
			'link_file' => '',
			'id_kategori' => '',
			'status' => '',
			'listkategoriinformasi' => $this->m_data->getkategoriinformasi()->result_array()
		);
		$this->load->view('admin/daftar_informasi/v_tambah_data', $data);
	}

	public function edit_daftar_informasi($id_daftar_informasi = '')
	{
		$daftar_informasi = $this->m_data->getdaftarinformasi("WHERE id_daftar_informasi='$id_daftar_informasi' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Daftar Informasi',
			'id_daftar_informasi' => $daftar_informasi[0]['id_daftar_informasi'],
			'nama_file' => $daftar_informasi[0]['nama_file'],
			'link_file' => $daftar_informasi[0]['link_file'],
			'nama_kategori' => $daftar_informasi[0]['nama_kategori'],
			'status' => $daftar_informasi[0]['status'],
			'listkategoriinformasi' => $this->m_data->getkategoriinformasi()->result_array()
		);
		$this->load->view('admin/daftar_informasi/v_edit_data', $data);
	}

	public function actiondaftarinformasi()
	{
		$nama_file = $this->input->post('nama_file', TRUE);
		$link_file = $this->input->post('link_file', TRUE);
		$id_kategori = $this->input->post('id_kategori', TRUE);
		$status = $this->input->post('status', TRUE);
		$statusdata = $this->input->post('statusdata', TRUE);
		if($statusdata == "Tambah Data")
		{
			$data = array(
				'nama_file' => $nama_file,
				'link_file' => $link_file,
				'id_kategori' => $id_kategori,
				'status' => $status
			);
			$this->m_data->InsertData('daftar_informasi', $data);
			$this->session->set_flashdata('berhasil', 'Berhasil Tambah Daftar Informasi');
			redirect(base_url('admin/dashboard/daftar_informasi'), 'refresh');
		}
		if($statusdata == "Update Data")
		{
			$id_daftar_informasi = $this->input->post('id_daftar_informasi', TRUE);
			$data = array(
				'nama_file' => $nama_file,
				'link_file' => $link_file,
				'id_kategori' => $id_kategori,
				'status' => $status
			);
			$this->m_data->UpdateData('daftar_informasi', $data, array('id_daftar_informasi' => $id_daftar_informasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Daftar Informasi');
			redirect(base_url('admin/dashboard/daftar_informasi'), 'refresh');
		}
		if($statusdata == "Hapus Data")
		{
			$id_daftar_informasi = $this->input->post('id_daftar_informasi', TRUE);
			$this->m_data->HapusData('daftar_informasi', array('id_daftar_informasi' => $id_daftar_informasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Hapus Daftar Informasi');
			redirect(base_url('admin/dashboard/daftar_informasi'), 'refresh');
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

    public function pemohon_informasi()
	{
		$data = array(
			'title' => 'Pemohon Informasi',
			'subtitle' => 'Data Pemohon Informasi',
			'listpemohoninformasi' => $this->m_data->getpemohoninformasi()->result_array()
		);
		$this->load->view('admin/pemohon_informasi/v_index', $data);
	}

	public function edit_pemohon_informasi($id_pemohon_informasi = '')
	{
		$pemohon_informasi = $this->m_data->getpemohoninformasi("WHERE id_pemohon_informasi='$id_pemohon_informasi' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Pemohon Informasi',
			'id_pemohon_informasi' => $pemohon_informasi[0]['id_pemohon_informasi'],
			'judul' => $pemohon_informasi[0]['judul'],
			'deskripsi' => $pemohon_informasi[0]['deskripsi']
		);
		$this->load->view('admin/pemohon_informasi/v_edit_data', $data);
	}

	public function actionpemohoninformasi()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$statusdata = $this->input->post('statusdata');
		if($statusdata == "Update Data")
		{
			$id_pemohon_informasi = $this->input->post('id_pemohon_informasi', TRUE);
			$data = array(
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$this->m_data->UpdateData('pemohon_informasi', $data, array('id_pemohon_informasi' => $id_pemohon_informasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Pemohon Informasi');
			redirect(base_url('admin/dashboard/pemohon_informasi'), 'refresh');
		}
	}

	public function pelayanan_informasi()
	{
		$data = array(
			'title' => 'Pelayanan Informasi',
			'subtitle' => 'Data Pelayanan Informasi',
			'listpelayananinformasi' => $this->m_data->getpelayananinformasi()->result_array()
		);
		$this->load->view('admin/pelayanan_informasi/v_index', $data);
	}

	public function edit_pelayanan_informasi($id_pelayanan_informasi = '')
	{
		$pelayanan_informasi = $this->m_data->getpelayananinformasi("WHERE id_pelayanan_informasi='$id_pelayanan_informasi' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Pelayanan Informasi',
			'id_pelayanan_informasi' => $pelayanan_informasi[0]['id_pelayanan_informasi'],
			'judul' => $pelayanan_informasi[0]['judul'],
			'deskripsi' => $pelayanan_informasi[0]['deskripsi']
		);
		$this->load->view('admin/pelayanan_informasi/v_edit_data', $data);
	}

	public function actionpelayananinformasi()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$statusdata = $this->input->post('statusdata');
		if($statusdata == "Update Data")
		{
			$id_pelayanan_informasi = $this->input->post('id_pelayanan_informasi', TRUE);
			$data = array(
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$this->m_data->UpdateData('pelayanan_informasi', $data, array('id_pelayanan_informasi' => $id_pelayanan_informasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Pelayanan Informasi');
			redirect(base_url('admin/dashboard/pelayanan_informasi'), 'refresh');
		}
	}

	public function maklumat_pelayanan()
	{
		$data = array(
			'title' => 'Maklumat Pelayanan',
			'subtitle' => 'Data Maklumat Pelayanan',
			'listmaklumatpelayanan' => $this->m_data->getmaklumatpelayanan()->result_array()
		);
		$this->load->view('admin/maklumat_pelayanan/v_index', $data);
	}

	public function edit_maklumat_pelayanan($id_maklumat_pelayanan = '')
	{
		$maklumat_pelayanan = $this->m_data->getmaklumatpelayanan("WHERE id_maklumat_pelayanan='$id_maklumat_pelayanan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Maklumat Pelayanan',
			'id_maklumat_pelayanan' => $maklumat_pelayanan[0]['id_maklumat_pelayanan'],
			'judul' => $maklumat_pelayanan[0]['judul'],
			'foto' => $maklumat_pelayanan[0]['foto']
		);
		$this->load->view('admin/maklumat_pelayanan/v_edit_data', $data);
	}

	public function actionmaklumatpelayanan()
	{
		$valid = $this->form_validation;

	    $valid->set_rules('foto','Foto','required',
		array('required' => 'Foto harus diisi'));

	    if ($valid->run() === FALSE)
	    {
			$old_name	= $_FILES["foto"]["name"];
			$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
			$new_name	= time().'.'.$ext;
			$config = array(
				'upload_path' 		=> './assets/admin/upload/maklumat_pelayanan/',
				'allowed_types' 	=> 'gif|jpg|png|jpeg',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/maklumat_pelayanan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_maklumat_pelayanan = $this->input->post('id_maklumat_pelayanan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_maklumat_pelayanan', $id_maklumat_pelayanan);
				$query = $this->db->get('maklumat_pelayanan');
				$row = $query->row();
		
				$this->m_data->UpdateData('maklumat_pelayanan', $data, array('id_maklumat_pelayanan' => $id_maklumat_pelayanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Maklumat Pelayanan');
				redirect(base_url("admin/dashboard/maklumat_pelayanan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_maklumat_pelayanan = $this->input->post('id_maklumat_pelayanan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_maklumat_pelayanan', $id_maklumat_pelayanan);
			    $query = $this->db->get('maklumat_pelayanan');
			    $row = $query->row();


				if($row->foto == 'default.png')
				{
					$this->m_data->UpdateData('maklumat_pelayanan', $data, array('id_maklumat_pelayanan' => $id_maklumat_pelayanan));
					// echo "<script>alert('Berhasil');window.location='".base_url()."';</script>";

					$this->session->set_flashdata('berhasil', 'Berhasil Update Maklumat Pelayanan');
					redirect(base_url("admin/dashboard/maklumat_pelayanan"));
				} else {

					unlink("./assets/admin/upload/maklumat_pelayanan/$row->foto");
					$this->m_data->UpdateData('maklumat_pelayanan', $data, array('id_maklumat_pelayanan' => $id_maklumat_pelayanan));

					$this->session->set_flashdata('berhasil', 'Berhasil Update Maklumat Pelayanan');
					redirect(base_url("admin/dashboard/maklumat_pelayanan"));
				
				}
	      	 } 
	    }
	}

	public function prosedur_pelayanan()
	{
		$data = array(
			'title' => 'Prosedur Pelayanan',
			'subtitle' => 'Data Prosedur Pelayanan',
			'listprosedurpelayanan' => $this->m_data->getprosedurpelayanan()->result_array()
		);
		$this->load->view('admin/prosedur_pelayanan/v_index', $data);
	}
}
?>