<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_layanan extends CI_Model
{
	function getmediasocial($where = '')
	{
		return $this->db->query("SELECT * FROM media_sosial $where");
	}
	
	function getringkasanlayanan($where = '')
	{
		return $this->db->query("SELECT * FROM ringkasan_layanan $where;");
	}
}
?>	