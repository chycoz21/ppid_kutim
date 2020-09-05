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

		$status = $this->m_data->ceksession();
		foreach ($status as $ste) {

			if ($ste->status == 3) {
			 
				$data_riwayat = array(
					'username' => $this->session->userdata('username'),
					'ip' => $this->input->ip_address(),
					'sistem_oprasi' => $this->agent->platform(),
					'browser' => $this->agent->browser(),
					'tanggal_login' => date('d-m-Y'),
					'jam' => date('h:i:sa'),
					'status' => 2,
					'level' => 1
		
				);
				$this->db->insert('riwayat_login',$data_riwayat);
				$this->session->sess_destroy();
				redirect(base_url('admin/login?alert=device'));


			}
		}
	}
	public function index()
	{
		$data = array(
			'listregistrasi' => $this->m_data->getregistrasi()->result_array(),
			'listhitungdaftarinformasi' => $this->m_data->gethitungdaftarinformasi()->result_array(),
			'listhitungregulasi' => $this->m_data->gethitungregulasi()->result_array(),
			'listhitungringkasanlayanan' => $this->m_data->gethitungringkasanlayanan()->result_array(),
			'listhitungkategoriinformasi' => $this->m_data->gethitungkategoriinformasi()->result_array(),
			'listpermohonaninformasi' => $this->m_data->getpermohonaninformasi()->result_array()
		);
		$this->load->view('admin/dashboard/v_index',$data);
	} 

	public function actionregistrasi()
	{
		$id = $this->input->post('id', TRUE);
		$id_register = $this->input->post('id_register', TRUE);
		$data = array(
			'status' => 2
		);
		$this->db->update('register_pemohon', $data, array('id' => $id));
		$this->db->update('permohonan_informasi', $data, array('id_register' => $id));
		$this->session->set_flashdata('berhasil', 'Berhasil Konfirmasi Data User');
		redirect(base_url('admin/dashboard/index'), 'refresh');
	}

	public function actionpermohonaninformasi()
	{
		$id = $this->input->post('id', TRUE);
		$status_permintaan = $this->input->post('status_permintaan', TRUE);
		$data = array(
			'status_permintaan' => $status_permintaan,
		);
		$this->m_data->UpdateData('permohonan_informasi', $data, array('id' => $id));
		$this->session->set_flashdata('sukses', 'Berhasil Konfirmasi Permintaan User');
		redirect(base_url('admin/dashboard/index'), 'refresh');
	}

	public function keluar(){
		$data_riwayat = array(
			'username' => $this->session->userdata('username'),
			'ip' => $this->input->ip_address(),
			'sistem_oprasi' => $this->agent->platform(),
			'browser' => $this->agent->browser(),
			'tanggal_login' => date('d-m-Y'),
			'jam' => date('h:i:sa'),
			'status' => 2,
			'level' => 1

		);
		$this->db->insert('riwayat_login',$data_riwayat);
		$this->session->sess_destroy();
		redirect(base_url('admin/login?alert=logout'));
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
			'subtitle' => 'Edit Kategori Informasi',
			'id_kategori' => $kategori[0]['id_kategori'],
			'nama_kategori' => $kategori[0]['nama_kategori'],
			'icon' => $kategori[0]['icon'],
			'link' => $kategori[0]['link']
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
			$valid = $this->form_validation;

		    $valid->set_rules('icon','Icon Kategori','required',
			array('required' => 'Icon Kategori harus diisi'));

		    if ($valid->run() === FALSE)
		    {
				$old_name	= $_FILES["icon"]["name"];
				$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
				$new_name	= time().'.'.$ext;
				$config = array(
					'upload_path' 		=> './assets/admin/upload/kategori/',
					'allowed_types' 	=> 'jpg|png',
					'file_name'			=> $new_name,
					'image_library'		=> 'gd2',
					'source_image'		=> './assets/admin/upload/kategori/'.$new_name,
					'create_thumb'		=> true,
					'maintain_ratio'	=> true,
					'thumb_marker'     	=> '',	
				);
		      	$this->load->library('upload', $config);
				if (! $this->upload->do_upload('icon')) 
				{
					$id_kategori = $this->input->post('id_kategori');
					$data = array(
								'nama_kategori'  => $this->input->post('nama_kategori', TRUE),
								'link'   	=> $this->input->post('link', TRUE),
					);
			
					$id = $this->db->where('id_kategori', $id_kategori);
					$query = $this->db->get('kategori');
					$row = $query->row();
			
					$this->m_data->UpdateData('kategori', $data, array('id_kategori' => $id_kategori));

					$this->session->set_flashdata('berhasil', 'Berhasil Update Kategori Informasi');
					redirect(base_url("admin/dashboard/kategori_informasi"));
		      	}else{
			      	$upload_data   = array('uploads' => $this->upload->data());				  

			      	$this->load->library('image_lib', $config);
			      	$this->image_lib->resize();
			      	$id_kategori = $this->input->post('id_kategori');
				    $data = array(
				    			'icon'   	=> $new_name,
				    			'nama_kategori'   => $this->input->post('nama_kategori', TRUE),
				    			'link'   	=> $this->input->post('link', TRUE),
				    );

				    $id = $this->db->where('id_kategori', $id_kategori);
				    $query = $this->db->get('kategori');
				    $row = $query->row();

					unlink("./assets/admin/upload/kategori/$row->icon");
					$this->m_data->UpdateData('kategori', $data, array('id_kategori' => $id_kategori));

					$this->session->set_flashdata('berhasil', 'Berhasil Update Kategori Informasi');
		      	} 
		      	redirect(base_url("admin/dashboard/kategori_informasi"));
		    }
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

	public function ringkasan_layanan()
	{
		$data = array(
			'title' => 'Ringkasan Layanan',
			'subtitle' => 'Data Ringkasan Layanan',
			'listringkasanlayanan' => $this->m_data->getringkasanlayanan()->result_array()

		);
		$this->load->view('admin/ringkasan_layanan/v_index', $data);
	}

	public function tambah_ringkasan_layanan()
	{
		$data = array(
			'subtitle' => 'Tambah Ringkasan Layanan',
			'judul' => '',
			'link_file' => ''
		);
		$this->load->view('admin/ringkasan_layanan/v_tambah_data', $data);
	}

	public function edit_ringkasan_layanan($id_ringkasan_layanan = '')
	{
		$ringkasan_layanan = $this->m_data->getringkasanlayanan("WHERE id_ringkasan_layanan='$id_ringkasan_layanan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Daftar Informasi',
			'id_ringkasan_layanan' => $ringkasan_layanan[0]['id_ringkasan_layanan'],
			'judul' => $ringkasan_layanan[0]['judul'],
			'link_file' => $ringkasan_layanan[0]['link_file']
		);
		$this->load->view('admin/ringkasan_layanan/v_edit_data', $data);
	}

	public function actionringkasanlayanan()
	{
		$judul = $this->input->post('judul');
		$link_file = $this->input->post('link_file');
		$statusdata = $this->input->post('statusdata');
		if($statusdata == "Tambah Data")
		{
			$data = array(
				'judul' => $judul,
				'link_file' => $link_file
			);
			$this->m_data->InsertData('ringkasan_layanan', $data);
			$this->session->set_flashdata('berhasil', 'Berhasil Tambah Ringkasan Layanan');
			redirect(base_url('admin/dashboard/ringkasan_layanan'), 'refresh');
		}
		if($statusdata == "Update Data")
		{
			$id_ringkasan_layanan = $this->input->post('id_ringkasan_layanan');
			$data = array(
				'judul' => $judul,
				'link_file' => $link_file
			);
			$this->m_data->UpdateData('ringkasan_layanan', $data, array('id_ringkasan_layanan' => $id_ringkasan_layanan));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Ringkasan Layanan');
			redirect(base_url('admin/dashboard/ringkasan_layanan'), 'refresh');
		}
		if($statusdata == "Hapus Data")
		{
			$id_ringkasan_layanan = $this->input->post('id_ringkasan_layanan');
			$this->m_data->HapusData('ringkasan_layanan', array('id_ringkasan_layanan' => $id_ringkasan_layanan));
			$this->session->set_flashdata('berhasil', 'Berhasil Hapus Ringkasan Layanan');
			redirect(base_url('admin/dashboard/ringkasan_layanan'), 'refresh');
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

    public function kewajiban_pemohon()
	{
		$data = array(
			'title' => 'Kewajiban Pemohon',
			'subtitle' => 'Data Kewajiban Pemohon',
			'listkewajibanpemohon' => $this->m_data->getkewajibanpemohon()->result_array()
		);
		$this->load->view('admin/standart_layanan/kewajiban_pemohon/v_index', $data);
	}

	public function edit_kewajiban_pemohon($id_kewajiban_pemohon = '')
	{
		$kewajiban_pemohon = $this->m_data->getkewajibanpemohon("WHERE id_kewajiban_pemohon='$id_kewajiban_pemohon' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Kewajiban Pemohon',
			'id_kewajiban_pemohon' => $kewajiban_pemohon[0]['id_kewajiban_pemohon'],
			'judul' => $kewajiban_pemohon[0]['judul'],
			'deskripsi' => $kewajiban_pemohon[0]['deskripsi']
		);
		$this->load->view('admin/standart_layanan/kewajiban_pemohon/v_edit_data', $data);
	}

	public function actionkewajibanpemohon()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$statusdata = $this->input->post('statusdata');
		if($statusdata == "Update Data")
		{
			$id_kewajiban_pemohon = $this->input->post('id_kewajiban_pemohon', TRUE);
			$data = array(
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$this->m_data->UpdateData('kewajiban_pemohon', $data, array('id_kewajiban_pemohon' => $id_kewajiban_pemohon));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Kewajiban Pemohon');
			redirect(base_url('admin/dashboard/kewajiban_pemohon'), 'refresh');
		}
	}

	public function kewajiban_bawaslu()
	{
		$data = array(
			'title' => 'Kewajiban Bawaslu',
			'subtitle' => 'Data Kewajiban Bawaslu',
			'listkewajibanbawaslu' => $this->m_data->getkewajibanbawaslu()->result_array()
		);
		$this->load->view('admin/standart_layanan/kewajiban_bawaslu/v_index', $data);
	}

	public function edit_kewajiban_bawaslu($id_kewajiban_bawaslu = '')
	{
		$kewajiban_bawaslu = $this->m_data->getkewajibanbawaslu("WHERE id_kewajiban_bawaslu='$id_kewajiban_bawaslu' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Kewajiban Bawaslu',
			'id_kewajiban_bawaslu' => $kewajiban_bawaslu[0]['id_kewajiban_bawaslu'],
			'judul' => $kewajiban_bawaslu[0]['judul'],
			'deskripsi' => $kewajiban_bawaslu[0]['deskripsi']
		);
		$this->load->view('admin/standart_layanan/kewajiban_bawaslu/v_edit_data', $data);
	}

	public function actionkewajibanbawaslu()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$statusdata = $this->input->post('statusdata');
		if($statusdata == "Update Data")
		{
			$id_kewajiban_bawaslu = $this->input->post('id_kewajiban_bawaslu', TRUE);
			$data = array(
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$this->m_data->UpdateData('kewajiban_bawaslu', $data, array('id_kewajiban_bawaslu' => $id_kewajiban_bawaslu));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Kewajiban Bawaslu');
			redirect(base_url('admin/dashboard/kewajiban_bawaslu'), 'refresh');
		}
	}

	public function maklumat_pelayanan()
	{
		$data = array(
			'title' => 'Maklumat Pelayanan',
			'subtitle' => 'Data Maklumat Pelayanan',
			'listmaklumatpelayanan' => $this->m_data->getmaklumatpelayanan()->result_array()
		);
		$this->load->view('admin/standart_layanan/maklumat_pelayanan/v_index', $data);
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
		$this->load->view('admin/standart_layanan/maklumat_pelayanan/v_edit_data', $data);
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
				'allowed_types' 	=> 'jpg|png',
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

			    unlink("./assets/admin/upload/maklumat_pelayanan/$row->foto");
				$this->m_data->UpdateData('maklumat_pelayanan', $data, array('id_maklumat_pelayanan' => $id_maklumat_pelayanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Maklumat Pelayanan');
	      	} 
	      	redirect(base_url("admin/dashboard/maklumat_pelayanan"));
	    }
	}

	public function prosedur_pelayanan()
	{
		$data = array(
			'title' => 'Prosedur Pelayanan',
			'subtitle' => 'Data Prosedur Pelayanan',
			'listprosedurpelayanan' => $this->m_data->getprosedurpelayanan()->result_array()
		);
		$this->load->view('admin/standart_layanan/prosedur_pelayanan/v_index', $data);
	}

	public function edit_prosedur_pelayanan($id_prosedur_pelayanan = '')
	{
		$prosedur_pelayanan = $this->m_data->getprosedurpelayanan("WHERE id_prosedur_pelayanan='$id_prosedur_pelayanan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Prosedur Pelayanan',
			'id_prosedur_pelayanan' => $prosedur_pelayanan[0]['id_prosedur_pelayanan'],
			'judul' => $prosedur_pelayanan[0]['judul'],
			'foto' => $prosedur_pelayanan[0]['foto']
		);
		$this->load->view('admin/standart_layanan/prosedur_pelayanan/v_edit_data', $data);
	}

	public function actionprosedurpelayanan()
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
				'upload_path' 		=> './assets/admin/upload/prosedur_pelayanan/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/prosedur_pelayanan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_prosedur_pelayanan = $this->input->post('id_prosedur_pelayanan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_prosedur_pelayanan', $id_prosedur_pelayanan);
				$query = $this->db->get('prosedur_pelayanan');
				$row = $query->row();
		
				$this->m_data->UpdateData('prosedur_pelayanan', $data, array('id_prosedur_pelayanan' => $id_prosedur_pelayanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Pelayanan');
				redirect(base_url("admin/dashboard/prosedur_pelayanan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_prosedur_pelayanan = $this->input->post('id_prosedur_pelayanan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_prosedur_pelayanan', $id_prosedur_pelayanan);
			    $query = $this->db->get('prosedur_pelayanan');
			    $row = $query->row();

			    unlink("./assets/admin/upload/prosedur_pelayanan/$row->foto");
				$this->m_data->UpdateData('prosedur_pelayanan', $data, array('id_prosedur_pelayanan' => $id_prosedur_pelayanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Pelayanan');
	      	} 
	      	redirect(base_url("admin/dashboard/prosedur_pelayanan"));
	    }
	}

	public function prosedur_pengajuan()
	{
		$data = array(
			'title' => 'Prosedur Pengajuan',
			'subtitle' => 'Data Prosedur Pengajuan',
			'listprosedurpengajuan' => $this->m_data->getprosedurpengajuan()->result_array()
		);
		$this->load->view('admin/standart_layanan/prosedur_pengajuan/v_index', $data);
	}

	public function edit_prosedur_pengajuan($id_prosedur_pengajuan = '')
	{
		$prosedur_pengajuan = $this->m_data->getprosedurpengajuan("WHERE id_prosedur_pengajuan='$id_prosedur_pengajuan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Prosedur Pengajuan',
			'id_prosedur_pengajuan' => $prosedur_pengajuan[0]['id_prosedur_pengajuan'],
			'judul' => $prosedur_pengajuan[0]['judul'],
			'foto' => $prosedur_pengajuan[0]['foto']
		);
		$this->load->view('admin/standart_layanan/prosedur_pengajuan/v_edit_data', $data);
	}

	public function actionprosedurpengajuan()
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
				'upload_path' 		=> './assets/admin/upload/prosedur_pengajuan/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/prosedur_pengajuan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_prosedur_pengajuan = $this->input->post('id_prosedur_pengajuan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_prosedur_pengajuan', $id_prosedur_pengajuan);
				$query = $this->db->get('prosedur_pengajuan');
				$row = $query->row();
		
				$this->m_data->UpdateData('prosedur_pengajuan', $data, array('id_prosedur_pengajuan' => $id_prosedur_pengajuan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Pengajuan');
				redirect(base_url("admin/dashboard/prosedur_pengajuan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_prosedur_pengajuan = $this->input->post('id_prosedur_pengajuan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_prosedur_pengajuan', $id_prosedur_pengajuan);
			    $query = $this->db->get('prosedur_pengajuan');
			    $row = $query->row();

				unlink("./assets/admin/upload/prosedur_pengajuan/$row->foto");
				$this->m_data->UpdateData('prosedur_pengajuan', $data, array('id_prosedur_pengajuan' => $id_prosedur_pengajuan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Pengajuan');
	      	} 
	      	redirect(base_url("admin/dashboard/prosedur_pengajuan"));
	    }
	}

	public function prosedur_permohonan()
	{
		$data = array(
			'title' => 'Prosedur Permohonan',
			'subtitle' => 'Data Prosedur Permohonan',
			'listprosedurpermohonan' => $this->m_data->getprosedurpermohonan()->result_array()
		);
		$this->load->view('admin/standart_layanan/prosedur_permohonan/v_index', $data);
	}

	public function edit_prosedur_permohonan($id_prosedur_permohonan = '')
	{
		$prosedur_permohonan = $this->m_data->getprosedurpermohonan("WHERE id_prosedur_permohonan='$id_prosedur_permohonan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Prosedur Permohonan',
			'id_prosedur_permohonan' => $prosedur_permohonan[0]['id_prosedur_permohonan'],
			'judul' => $prosedur_permohonan[0]['judul'],
			'foto' => $prosedur_permohonan[0]['foto']
		);
		$this->load->view('admin/standart_layanan/prosedur_permohonan/v_edit_data', $data);
	}

	public function actionprosedurpermohonan()
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
				'upload_path' 		=> './assets/admin/upload/prosedur_permohonan/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/prosedur_permohonan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_prosedur_permohonan = $this->input->post('id_prosedur_permohonan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_prosedur_permohonan', $id_prosedur_permohonan);
				$query = $this->db->get('prosedur_permohonan');
				$row = $query->row();
		
				$this->m_data->UpdateData('prosedur_permohonan', $data, array('id_prosedur_permohonan' => $id_prosedur_permohonan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Permohonan');
				redirect(base_url("admin/dashboard/prosedur_permohonan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_prosedur_permohonan = $this->input->post('id_prosedur_permohonan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_prosedur_permohonan', $id_prosedur_permohonan);
			    $query = $this->db->get('prosedur_permohonan');
			    $row = $query->row();

				unlink("./assets/admin/upload/prosedur_permohonan/$row->foto");
				$this->m_data->UpdateData('prosedur_permohonan', $data, array('id_prosedur_permohonan' => $id_prosedur_permohonan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Prosedur Permohonan');
	      	} 
	      	redirect(base_url("admin/dashboard/prosedur_permohonan"));
	    }
	}

	public function waktu_layanan()
	{
		$data = array(
			'title' => 'Waktu Layanan',
			'subtitle' => 'Data Waktu Layanan',
			'listwaktulayanan' => $this->m_data->getwaktulayanan()->result_array()
		);
		$this->load->view('admin/standart_layanan/waktu_layanan/v_index', $data);
	}

	public function edit_waktu_layanan($id_waktu_layanan = '')
	{
		$waktu_layanan = $this->m_data->getwaktulayanan("WHERE id_waktu_layanan='$id_waktu_layanan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Waktu Layanan',
			'id_waktu_layanan' => $waktu_layanan[0]['id_waktu_layanan'],
			'judul' => $waktu_layanan[0]['judul'],
			'foto' => $waktu_layanan[0]['foto']
		);
		$this->load->view('admin/standart_layanan/waktu_layanan/v_edit_data', $data);
	}

	public function actionwaktulayanan()
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
				'upload_path' 		=> './assets/admin/upload/waktu_layanan/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/waktu_layanan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_waktu_layanan = $this->input->post('id_waktu_layanan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_waktu_layanan', $id_waktu_layanan);
				$query = $this->db->get('waktu_layanan');
				$row = $query->row();
		
				$this->m_data->UpdateData('waktu_layanan', $data, array('id_waktu_layanan' => $id_waktu_layanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Waktu Layanan');
				redirect(base_url("admin/dashboard/waktu_layanan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_waktu_layanan = $this->input->post('id_waktu_layanan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_waktu_layanan', $id_waktu_layanan);
			    $query = $this->db->get('waktu_layanan');
			    $row = $query->row();

				unlink("./assets/admin/upload/waktu_layanan/$row->foto");
				$this->m_data->UpdateData('waktu_layanan', $data, array('id_waktu_layanan' => $id_waktu_layanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Waktu Layanan');
	      	} 
	      	redirect(base_url("admin/dashboard/waktu_layanan"));
	    }
	}

	public function biaya_layanan()
	{
		$data = array(
			'title' => 'Biaya Layanan',
			'subtitle' => 'Data Biaya Layanan',
			'listbiayalayanan' => $this->m_data->getbiayalayanan()->result_array()
		);
		$this->load->view('admin/standart_layanan/biaya_layanan/v_index', $data);
	}

	public function edit_biaya_layanan($id_biaya_layanan = '')
	{
		$biaya_layanan = $this->m_data->getbiayalayanan("WHERE id_biaya_layanan='$id_biaya_layanan' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Biaya Layanan',
			'id_biaya_layanan' => $biaya_layanan[0]['id_biaya_layanan'],
			'judul' => $biaya_layanan[0]['judul'],
			'foto' => $biaya_layanan[0]['foto']
		);
		$this->load->view('admin/standart_layanan/biaya_layanan/v_edit_data', $data);
	}

	public function actionbiayalayanan()
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
				'upload_path' 		=> './assets/admin/upload/biaya_layanan/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/biaya_layanan/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_biaya_layanan = $this->input->post('id_biaya_layanan');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_biaya_layanan', $id_biaya_layanan);
				$query = $this->db->get('biaya_layanan');
				$row = $query->row();
		
				$this->m_data->UpdateData('biaya_layanan', $data, array('id_biaya_layanan' => $id_biaya_layanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Biaya Layanan');
				redirect(base_url("admin/dashboard/biaya_layanan"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_biaya_layanan = $this->input->post('id_biaya_layanan');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_biaya_layanan', $id_biaya_layanan);
			    $query = $this->db->get('biaya_layanan');
			    $row = $query->row();

				unlink("./assets/admin/upload/biaya_layanan/$row->foto");
				$this->m_data->UpdateData('biaya_layanan', $data, array('id_biaya_layanan' => $id_biaya_layanan));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Biaya Layanan');
	      	} 
	      	redirect(base_url("admin/dashboard/biaya_layanan"));
	    }
	}

	public function slider_image()
	{
		$data = array(
			'title' => 'Slider Image',
			'subtitle' => 'Data Slider Image',
			'listsliderimage' => $this->m_data->getsliderimage()->result_array()
		);
		$this->load->view('admin/slider_image/v_index', $data);
	}

	public function edit_slider_image($id_slider = '')
	{
		$slider_image = $this->m_data->getsliderimage("WHERE id_slider='$id_slider' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Slider Image',
			'id_slider' => $slider_image[0]['id_slider'],
			'src_image' => $slider_image[0]['src_image'],
			'caption' => $slider_image[0]['caption'],
			'link_url' => $slider_image[0]['link_url']
		);
		$this->load->view('admin/slider_image/v_edit_data', $data);
	}

	public function actionsliderimage()
	{
		$valid = $this->form_validation;

	    $valid->set_rules('src_image','Src Image','required',
		array('required' => 'Src Image harus diisi'));

	    if ($valid->run() === FALSE)
	    {
			$old_name	= $_FILES["src_image"]["name"];
			$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
			$new_name	= time().'.'.$ext;
			$config = array(
				'upload_path' 		=> './assets/admin/upload/slider_image/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/slider_image/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('src_image')) 
			{
				$id_slider = $this->input->post('id_slider');
				$data = array(
							'caption'   	=> $this->input->post('caption', TRUE),
							'link_url'   	=> $this->input->post('link_url', TRUE),
				);
		
				$id = $this->db->where('id_slider', $id_slider);
				$query = $this->db->get('slider_image');
				$row = $query->row();
		
				$this->m_data->UpdateData('slider_image', $data, array('id_slider' => $id_slider));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Slider Image');
				redirect(base_url("admin/dashboard/slider_image"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_slider = $this->input->post('id_slider');
			    $data = array(
			    			'src_image' => $new_name,
			    			'caption'   	=> $this->input->post('caption', TRUE),
							'link_url'   	=> $this->input->post('link_url', TRUE),
			    );

			    $id = $this->db->where('id_slider', $id_slider);
			    $query = $this->db->get('slider_image');
			    $row = $query->row();


				unlink("./assets/admin/upload/slider_image/$row->src_image");
				$this->m_data->UpdateData('slider_image', $data, array('id_slider' => $id_slider));
				$this->session->set_flashdata('berhasil', 'Berhasil Update Slider Image');
	      	} 
	      	redirect(base_url("admin/dashboard/slider_image"));
	    }
	}

	public function regulasi()
	{
		$data = array(
			'title' => 'Regulasi',
			'subtitle' => 'Data Regulasi',
			'listregulasi' => $this->m_data->getregulasi()->result_array()

		);
		$this->load->view('admin/regulasi/v_index', $data);
	}

	public function tambah_regulasi()
	{
		$data = array(
			'subtitle' => 'Tambah Regulasi',
			'judul' => '',
			'tentang' => '',
			'link_file' => ''
		);
		$this->load->view('admin/regulasi/v_tambah_data', $data);
	}

	public function edit_regulasi($id_regulasi = '')
	{
		$regulasi = $this->m_data->getregulasi("WHERE id_regulasi='$id_regulasi' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Regulasi',
			'id_regulasi' => $regulasi[0]['id_regulasi'],
			'judul' => $regulasi[0]['judul'],
			'tentang' => $regulasi[0]['tentang'],
			'link_file' => $regulasi[0]['link_file']
		);
		$this->load->view('admin/regulasi/v_edit_data', $data);
	}

	public function actionregulasi()
	{
		$judul = $this->input->post('judul');
		$tentang = $this->input->post('tentang');
		$link_file = $this->input->post('link_file');
		$statusdata = $this->input->post('statusdata');
		if ($statusdata == "Tambah Data")
		{
			$data = array(
				'judul' => $judul,
				'tentang' => $tentang,
				'link_file' => $link_file
			);
			$this->m_data->InsertData('regulasi', $data);
			$this->session->set_flashdata('berhasil', 'Berhasil Tambah Regulasi');
			redirect(base_url('admin/dashboard/regulasi'), 'refresh');
		}
		if ($statusdata == "Update Data")
		{
			$id_regulasi = $this->input->post('id_regulasi');
			$data = array(
				'judul' => $judul,
				'tentang' => $tentang,
				'link_file' => $link_file
			);
			$this->m_data->UpdateData('regulasi', $data, array('id_regulasi' => $id_regulasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Update Regulasi');
			redirect(base_url('admin/dashboard/regulasi'), 'refresh');
		}
		if ($statusdata == "Hapus Data")
		{
			$id_regulasi = $this->input->post('id_regulasi');
			$this->m_data->HapusData('regulasi', array('id_regulasi' => $id_regulasi));
			$this->session->set_flashdata('berhasil', 'Berhasil Hapus Regulasi');
			redirect(base_url('admin/dashboard/regulasi'), 'refresh');
		}
	}

	public function user_management()
	{
		$data['user_management'] = $this->db->get('user')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/user_management/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}
	public function tambah_user_management()
	{
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/user_management/v_tambah_user_management');
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_user_management()
	{
		$data = array(
			'user_nm' => $this->input->post('nama'),
			'user_email' => $this->input->post('email'),
			'user_usrnm' => $this->input->post('username'),
			'user_pass' => md5($this->input->post('password')),
			'user_lvl' => $this->input->post('level'),
			'user_status' => 1
		);
         $this->m_data->InsertData('user',$data);
		redirect('admin/dashboard/user_management','refresh');
	}

	public function edit_user_management($id)
	{
		$data['user_management'] = $this->m_data->user_management_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/user_management/v_edit_user_management',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_user_management($id)
	{
		$data = array(
			'user_nm' => $this->input->post('nama'),
			'user_email' => $this->input->post('email'),
			'user_usrnm' => '1',
			'user_pass' => md5($this->input->post('password')),
			'user_lvl' => $this->input->post('level'),
			'user_status' => 1
		);
		$this->m_data->UpdateData('user', $data, array('id' => $id));
		redirect('admin/dashboard/user_management','refresh');
	}

	public function blokir_user_management($id)
	{
		$data = array(	
			'level' => 4
		);
		$this->m_data->UpdateData('user_management', $data, array('id' => $id));
		redirect('admin/dashboard/user_management','refresh');
	}
	
	public function unblokir_user_management($id)
	{
		$data = array(	
			'level' => 3
		);
		$this->m_data->UpdateData('user_management', $data, array('id' => $id));
		redirect('admin/dashboard/user_management','refresh');
	}


	public function visi_misi()
	{
		$data = array(
			'title' => 'Visi Misi',
			'subtitle' => 'Data Visi Misi',
			'listvisimisi' => $this->m_data->getvisimisi()->result_array()
		);
		$this->load->view('admin/visi_misi/v_index', $data);
	}

	public function edit_visi_misi($id_visi_misi = '')
	{
		$visi_misi = $this->m_data->getvisimisi("WHERE id_visi_misi='$id_visi_misi' ")->result_array();
		$data = array(
			'subtitle' => 'Edit Biaya Layanan',
			'id_visi_misi' => $visi_misi[0]['id_visi_misi'],
			'judul' => $visi_misi[0]['judul'],
			'foto' => $visi_misi[0]['foto']
		);
		$this->load->view('admin/visi_misi/v_edit_visi_misi', $data);
	}

	public function actionvisimisi()
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
				'upload_path' 		=> './assets/admin/upload/visi_misi/',
				'allowed_types' 	=> 'jpg|png',
				'file_name'			=> $new_name,
				'image_library'		=> 'gd2',
				'source_image'		=> './assets/admin/upload/visi_misi/'.$new_name,
				'create_thumb'		=> true,
				'maintain_ratio'	=> true,
				'thumb_marker'     	=> '',	
			);
	      	$this->load->library('upload', $config);
			if (! $this->upload->do_upload('foto')) 
			{
				$id_visi_misi = $this->input->post('id_visi_misi');
				$data = array(
							'judul'   	=> $this->input->post('judul', TRUE),
				);
		
				$id = $this->db->where('id_visi_misi', $id_visi_misi);
				$query = $this->db->get('visi_misi');
				$row = $query->row();
		
				$this->m_data->UpdateData('visi_misi', $data, array('id_visi_misi' => $id_visi_misi));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Visi Misi');
				redirect(base_url("admin/dashboard/visi_misi"));
	      	}else{
		      	$upload_data   = array('uploads' => $this->upload->data());				  

		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_visi_misi = $this->input->post('id_visi_misi');
			    $data = array(
			    			'foto'   	=> $new_name,
			    			'judul'   => $this->input->post('judul', TRUE),
			    );

			    $id = $this->db->where('id_visi_misi', $id_visi_misi);
			    $query = $this->db->get('visi_misi');
			    $row = $query->row();

				unlink("./assets/admin/upload/visi_misi/$row->foto");
				$this->m_data->UpdateData('visi_misi', $data, array('id_visi_misi' => $id_visi_misi));

				$this->session->set_flashdata('berhasil', 'Berhasil Update Visi Misi');
	      	} 
	      	redirect(base_url("admin/dashboard/visi_misi"));
	    }
	}

	public function struktur_ppid()
	{
		$data['struktur'] = $this->db->get('struktur_ppid')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/struktur_ppid/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}


	public function edit_struktur_ppid($id)
	{
		$data['struktur'] =  $this->m_data->struktur_ppid_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/struktur_ppid/v_edit_struktur_ppid',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_struktur_ppid($id)
	{
	
		$gambar    = $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else {
			$config ['upload_path'] = './assets/admin/upload/struktur_ppid/';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo 'gagal upload';
				}else{
					$gambar=$this->upload->data('file_name');

				}
		}
		$data = array(
			
			'gambar' => $gambar
		);
		$this->m_data->UpdateData('struktur_ppid', $data, array('id' => $id));
		redirect('admin/dashboard/struktur_ppid');
	    
	}

	public function profil_singkat()
	{
		$data['profil'] = $this->db->get('profil_singkat')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/profil_singkat/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}


	public function edit_profil_singkat($id)
	{
		$data['profil'] =  $this->m_data->profil_singkat_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/profil_singkat/v_edit_profil_singkat',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_profil_singkat($id)
	{
	
		$gambar    = $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else {
			$config ['upload_path'] = './assets/admin/upload/profil_singkat/';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo 'gagal upload';
				}else{
					$gambar=$this->upload->data('file_name');

				}
		}
		$data = array(
			
			'gambar' => $gambar
		);
		$this->m_data->UpdateData('profil_singkat', $data, array('id' => $id));
		redirect('admin/dashboard/profil_singkat');
	    
	}

	//  dasar hukum

	public function dasar_hukum()
	{
		$data['data'] = $this->db->get('dasar_hukum')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/dasar_hukum/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}


	public function edit_dasar_hukum($id)
	{
		$data['data'] =  $this->m_data->dasar_hukum_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/dasar_hukum/v_edit_dasar_hukum',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_dasar_hukum($id)
	{
	
		$gambar    = $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else {
			$config ['upload_path'] = './assets/admin/upload/dasar_hukum/';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo 'gagal upload';
				}else{
					$gambar=$this->upload->data('file_name');

				}
		}
		$data = array(
			
			'gambar' => $gambar
		);
		$this->m_data->UpdateData('dasar_hukum', $data, array('id' => $id));
		redirect('admin/dashboard/dasar_hukum');
	    
	}

	// tugas fungsi
	public function tugas_fungsi()
	{
		$data['data'] = $this->db->get('tugas_fungsi')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/tugas_fungsi/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}


	public function edit_tugas_fungsi($id)
	{
		$data['data'] =  $this->m_data->tugas_fungsi_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/tugas_fungsi/v_edit_tugas_fungsi',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_tugas_fungsi($id)
	{
	
		$gambar    = $_FILES['gambar']['name'];
		if ($gambar ='') {
			
		}else {
			$config ['upload_path'] = './assets/admin/upload/tugas_fungsi/';
				$config ['allowed_types'] = 'jpg|jpeg|png|gif';

				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('gambar')) {
					echo 'gagal upload';
				}else{
					$gambar=$this->upload->data('file_name');

				}
		}
		$data = array(
			
			'gambar' => $gambar
		);
		$this->m_data->UpdateData('tugas_fungsi', $data, array('id' => $id));
		redirect('admin/dashboard/tugas_fungsi');
	    
	}
	public function peraturan()
	{
		$data['alamat'] = $this->db->get('alamat')->result();
		$data['sosmed'] = $this->db->get('media_sosial')->result();
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/pengaturan/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
		
	}

	public function edit_pengaturan_alamat($id)
	{
		$data['edit'] =  $this->m_data->where_data($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/pengaturan/v_edit_alamat',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_alamat($id)
	{
	   
		$data = array(
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('no_hp')
		);
		$this->m_data->UpdateData('alamat', $data, array('id' => $id));
		redirect('admin/dashboard/peraturan');
		
	}
	public function edit_pengaturan_sosmed($id)
	{
		$data['edit'] =  $this->m_data->edit_alamat_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/pengaturan/v_edit_sosmed',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_edit_sosmed($id)
	{
	   
		$data = array(
			'media_sosial' => $this->input->post('nama'),
			'url' => $this->input->post('url')
		);
		$this->m_data->UpdateData('media_sosial', $data, array('id' => $id));
		redirect('admin/dashboard/peraturan');
		
	}

	public function edit_sosmed($id)
	{
		$data['edit'] =  $this->m_data->edit_sosmed_detail($id);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/pengaturan/v_edt_sosmed',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function tambah_sosmed()
	{
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/pengaturan/v_tambah_sosmed');
		$this->load->view('admin/dashboard/v_footer');
	}

	public function simpan_sosmed()
	{
		$data = array(
			'media_sosial' => $this->input->post('nama'),
			'url' => $this->input->post('url')
		);
		$this->db->insert('media_sosial', $data);
		
		redirect('admin/dashboard/peraturan');
	}

	public function permohonan_informasi()
	{
		$data = array(
			'permohonan_informasi' => $this->db->get('permohonan_informasi')->result(),
	
		);
		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/permohonan_informasi/v_index',$data);
		$this->load->view('admin/dashboard/v_footer');
	}

	public function terimapermintaan($id)
	{
		$data = array(
			'status_permintaan' => 2
		);

		$this->db->where('id', $id);
		
		$this->db->update('permohonan_informasi', $data);
		redirect('admin/dashboard/permohonan_informasi');
		
	}

	public function tolakpermintaan($id)
	{
		$data = array(
			'status_permintaan' => 3
		);

		$this->db->where('id', $id);
		
		$this->db->update('permohonan_informasi', $data);
		redirect('admin/dashboard/permohonan_informasi');
		
	}


	public function cekuser($id)
	{
		$data = array(
			'user' => $this->m_data->cekuser($id)
		);


		$this->load->view('admin/dashboard/v_header');
		$this->load->view('admin/permohonan_informasi/v_profilex',$data);
		$this->load->view('admin/dashboard/v_footer');

	}

}
?>
