<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_controller 
{
	public function __Construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'PPID BAWASLU KUTIM'
		);
		$this->load->view('home/v_beranda', $data);
	}
}
?>	