<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
	function getsaatini($where = '')
	{
		return $this->db->query("SELECT * FROM daftar_informasi WHERE id_kategori='1' $where;");
	}
}
?>