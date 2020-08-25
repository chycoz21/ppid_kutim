<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profile extends CI_Model
{
	function getvisimisi($where = '')
	{
		return $this->db->query("SELECT * FROM visi_misi $where");
	}

}
?>	