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

	function getpemohoninformasi($where = '')
	{
		return $this->db->query("SELECT * FROM pemohon_informasi $where;");
	}

	function getpelayananinformasi($where = '')
	{
		return $this->db->query("SELECT * FROM pelayanan_informasi $where;");
	}

	function getmaklumatpelayanan($where = '')
	{
		return $this->db->query("SELECT * FROM maklumat_pelayanan $where;");
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

	public function user_management_detail($id)
	{
		$user_management = $this->db->where('id', $id)->get('user_management');
		if ($user_management->num_rows() > 0) {
			return $user_management->result();
   
		}else{
			return false;
		}
	}

	public function visi_misi_detail($id)
	{
		$visi_misi = $this->db->where('id', $id)->get('visi_misi');
		if ($visi_misi->num_rows() > 0) {
			return $visi_misi->result();
   
		}else{
			return false;
		}
	}
	public function struktur_ppid_detail($id)
	{
		$struktur_ppid = $this->db->where('id', $id)->get('struktur_ppid');
		if ($struktur_ppid->num_rows() > 0) {
			return $struktur_ppid->result();
   
		}else{
			return false;
		}
	}
	public function profil_singkat_detail($id)
	{
		$profil_singkat = $this->db->where('id', $id)->get('profil_singkat');
		if ($profil_singkat->num_rows() > 0) {
			return $profil_singkat->result();
   
		}else{
			return false;
		}
	}

	public function edit_alamat_detail($id)
	{
		$alamat = $this->db->where('id', $id)->get('alamat');
		if ($alamat->num_rows() > 0) {
			return $alamat->result();
   
		}else{
			return false;
		}
	}
}


 ?>