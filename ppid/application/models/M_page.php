<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_page extends CI_Model{
     
    function insert_post($judul,$deskripsi){
        $data = array(
            'judul'    => $judul,
            'deskripsi' => $deskripsi
        );
        $this->db->insert('page',$data);
    }
 
    function get_article_by_id($id){
        $query = $this->db->get_where('page', array('id' =>  $id));
        return $query;
    }

    public function page_detail($id)
    {
        $page = $this->db->where('id', $id)->get('page');
		if ($page->num_rows() > 0) {
			return $page->result();
   
		}else{
			return false;
		}
    }

}