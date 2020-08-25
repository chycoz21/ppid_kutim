<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_layanan extends CI_Model
{
	function getringkasanlayanan($where = '')
	{
		return $this->db->query("SELECT * FROM ringkasan_layanan $where;");
	}
}
?>	