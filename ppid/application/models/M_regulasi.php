<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_regulasi extends CI_Model
{
	function getregulasi($where = '')
	{
		return $this->db->query("SELECT * FROM regulasi $where;");
	}
}
?>	