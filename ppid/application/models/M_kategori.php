<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model
{
	function getmediasocial($where = '')
	{
		return $this->db->query("SELECT * FROM media_sosial $where");
	}

	function getkategori($where = '')
	{
		return $this->db->query("SELECT * FROM kategori $where");
	}	

	function getseluruhinformasi($where = '')
	{
		return $this->db->query("SELECT daftar_informasi.*,kategori.nama_kategori FROM daftar_informasi LEFT JOIN kategori ON daftar_informasi.id_kategori = kategori.id_kategori $where;");
	}
	
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