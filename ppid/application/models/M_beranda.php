<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beranda extends CI_Model
{
	function getmediasocial($where = '')
	{
		return $this->db->query("SELECT * FROM media_sosial $where");
	}

	function getsliderimage($where = '')
	{
		return $this->db->query("SELECT * FROM slider_image $where");
	}
}
?>	