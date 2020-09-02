<?php 

class M_data extends CI_Model
{
	
	function gethitungkategoriinformasi($where = '')
	{
		return $this->db->query("SELECT count(id_kategori) as kategori  FROM kategori $where;");
	}

	function gethitungdaftarinformasi($where = '') 
	{
		return $this->db->query("SELECT count(id_daftar_informasi) as daftar_informasi FROM daftar_informasi $where;");
	}

	function gethitungregulasi($where = '')
	{
		return $this->db->query("SELECT count(id_regulasi) as regulasi FROM regulasi $where;");
	}

	function gethitungringkasanlayanan($where = '') 
	{
		return $this->db->query("SELECT count(id_ringkasan_layanan) as ringkasan_layanan FROM ringkasan_layanan $where;");
	}

	function getpermohonaninformasi($where = '')
	{
		return $this->db->query("SELECT * FROM permohonan_informasi RIGHT JOIN register_pemohon ON permohonan_informasi.id_register = register_pemohon.id $where;");
	}

	function getregistrasi()
	{
		return $this->db->query("SELECT * FROM register_pemohon LEFT JOIN permohonan_informasi ON register_pemohon.id = permohonan_informasi.id_register WHERE register_pemohon.status='1' AND permohonan_informasi.status='1' ");
	}

	function getkategoriinformasi($where = '')
	{
		return $this->db->query("SELECT * FROM kategori $where");
	}

	function getdaftarinformasi($where = '')
	{
		return $this->db->query("SELECT daftar_informasi.*,kategori.nama_kategori FROM daftar_informasi LEFT JOIN kategori ON daftar_informasi.id_kategori = kategori.id_kategori $where;");
	}

	function getringkasanlayanan($where = '')
	{
		return $this->db->query("SELECT * FROM ringkasan_layanan $where");
	}

	function getvisimisi($where = '')
	{
		return $this->db->query("SELECT * FROM visi_misi $where;");
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

	function getregulasi($where = '')
	{
		return $this->db->query("SELECT * FROM regulasi $where;");
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
	public function where_data($id)
	{
		$profile = $this->db->where('id',$id )->get('alamat');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
	public function edit_sosmed_detail($id)
	{
		$profile = $this->db->where('id',$id )->get('media_sosial');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
	public function dasar_hukum_detail($id)
	{
		$profile = $this->db->where('id',$id )->get('dasar_hukum');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
	public function tugas_fungsi_detail($id)
	{
		$profile = $this->db->where('id',$id )->get('tugas_fungsi');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}

	public function get_profile($id)
	{
		$profile = $this->db->where('email',$id)->get('register_pemohon');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}

	public function daftar_permintaan()
	{
		$profile = $this->db->where('id_register',$this->session->userdata('id'))->get('permohonan_informasi');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}

	public function cekuser($id)
	{
		$profile = $this->db->where('id',$id)->get('register_pemohon');
		if ($profile->num_rows() > 0) {
			return $profile->result();
   
		}else{
			return false;
		}
	}
	
}
?>
