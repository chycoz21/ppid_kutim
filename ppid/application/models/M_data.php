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

	function getsliderimage($where = '')
	{
		return $this->db->query("SELECT * FROM slider_image $where;");
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
		$user_management = $this->db->where('id', $id)->get('user');
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

	public function profile()
	{
		$profile = $this->db->where('id',$this->session->userdata('id') )->get('register_pemohon');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
	public function permohon()
	{
		$profile = $this->db->where('id_register',$this->session->userdata('id') )->get('permohonan_informasi');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
}


 ?>