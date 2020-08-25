<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
	function getsaatini($where = '')
	{
		return $this->db->query("SELECT * FROM daftar_informasi WHERE id_kategori='1' AND status='1' $where;");
	}

	function getberkala($where = '')
	{
		return $this->db->query("SELECT * FROM daftar_informasi WHERE id_kategori='2' AND status='1' $where;");
	}

	function getsertamerta($where = '')
	{
		return $this->db->query("SELECT * FROM daftar_informasi WHERE id_kategori='3' AND status='1' $where;");
	}

	function getdikecualikan($where = '')
	{
		return $this->db->query("SELECT * FROM daftar_informasi WHERE id_kategori='4' AND status='1' $where;");
	}
}
?>