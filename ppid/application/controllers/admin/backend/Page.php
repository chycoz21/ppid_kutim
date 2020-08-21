<?php 

defined('BASEPATH') OR exit('NO direct script access allowed');

class Page extends CI_controller {
    
   

	public function index()
	{
		$this->load->view('admin/v_login');
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
}

 ?>