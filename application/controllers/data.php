<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->page->menu('menus/mnu');
		//$this->load->helper('url');
		$this->load->model('data_penduduk_mod');
	}

	public function usia()
	{
    	$data = $this->data_penduduk_mod->get_data_usia(10,14);
		$usia = $data->row_array();
		return $usia['TOT_UMR'];
    }
}
