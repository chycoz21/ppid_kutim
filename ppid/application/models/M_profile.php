<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model
{
	function getmediasocial($where = '')
	{
		return $this->db->query("SELECT * FROM media_sosial $where");
	}
	
	function getvisimisi($where = '')
	{
		return $this->db->query("SELECT * FROM visi_misi $where");
	}

}
?>	