<?php 

class M_data extends CI_Model
{
	function getkategoriinformasi($where = '')
	{
		return $this->db->query("SELECT * FROM kategori $where");
	}

	function getdaftarinformasi($where = '')
	{
		return $this->db->query("SELECT daftar_informasi.*,kategori.nama_kategori FROM daftar_informasi LEFT JOIN kategori ON daftar_informasi.id_kategori = kategori.id_kategori $where;");
	}

	function getkewajibanpemohon($where = '')
	{
		return $this->db->query("SELECT * FROM kewajiban_pemohon $where;");
	}

	function getkewajibanbawaslu($where = '')
	{
		return $this->db->query("SELECT * FROM kewajiban_bawaslu $where;");
	}

	function getmaklumatpelayanan($where = '')
	{
		return $this->db->query("SELECT * FROM maklumat_pelayanan $where;");
	}

	function getprosedurpelayanan($where = '')
	{
		return $this->db->query("SELECT * FROM prosedur_pelayanan $where;");
	}

	function getprosedurpengajuan($where = '')
	{
		return $this->db->query("SELECT * FROM prosedur_pengajuan $where;");
	}

	function getprosedurpermohonan($where = '')
	{
		return $this->db->query("SELECT * FROM prosedur_permohonan $where;");
	}

	function getwaktulayanan($where = '')
	{
		return $this->db->query("SELECT * FROM waktu_layanan $where;");
	}

	function getbiayalayanan($where = '')
	{
		return $this->db->query("SELECT * FROM biaya_layanan $where;");
	}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	function InsertData($table,$data)
	{
		$this->db->insert($table,$data);
	}

	function UpdateData($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	function HapusData($table,$where)
	{
		$this->db->delete($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}


 ?>