<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kec_con extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->library('datatables');
    }
	function json(){
        $this->datatables->select('NAMA_KEC');
        $this->datatables->from('V_CAPIL_KEL');
        return print_r($this->datatables->generate());
    }
	
}
