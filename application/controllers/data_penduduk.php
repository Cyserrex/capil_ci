<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->page->menu('menus/mnu');
		//$this->load->helper('url');
		$this->load->model('data_penduduk_mod');
	}

	public function JumlahP()
	{
    	header("Content-type: application/json");
		$res=$this->data_penduduk_mod->get_data_pend($_POST['jk']);
		$data = $res->row();
		if($data)
			echo "{\"success\":true,\"isi\":\"".$data->JK."\"}" ;
		else
			echo "{\"success\":false}" ;
    }
}
