<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_standart_layanan extends CI_Model
{
	function gethakkewajiban($where = '')
	{
		return $this->db->query("SELECT * FROM kewajiban_pemohon $where;");
	}

	function gethakkewajibanpelayanan($where = '')
	{
		return $this->db->query("SELECT * FROM kewajiban_bawaslu $where;");
	}

	function getmaklumatpelayanan($where = '')
	{
		return $this->db->query("SELECT * FROM maklumat_pelayanan $where;");
	}

	function getprosedurpelayananinformasi($where = '')
	{
		return $this->db->query("SELECT * FROM prosedur_pelayanan $where;");
	}

	function getprosedurpengajuankeberatan($where = '')
	{
		return $this->db->query("SELECT * FROM prosedur_pengajuan $where;");
	}

	function getprosedurpermohonansengketa($where = '')
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
}
?>	