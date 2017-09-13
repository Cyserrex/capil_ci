<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('data_penduduk_mod');
    }
	public function index()
	{
		$data = $this->data_penduduk_mod->get_data_pend();
		$pend = $data->row_array();
		$pend_ar = array(
			'TOT_PRM'=> $pend['PRM'], 
			'TOT_LK'=> $pend['LK'],
			'TOTAL' => $pend['TOTAL']
			);
		$ats = array ('TITLE'=> 'Penduduk | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_utama', $pend_ar);
        $this->load->view('template/bawah');
	}
	public function agama()
	{
		$data = $this->data_penduduk_mod->get_data_agm();
		$agm = $data->row_array();

		$ats = array ('TITLE'=> 'Agama | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_agm', $agm);
        $this->load->view('template/bawah');
    }
	public function kecamatan()
	{
		$data = $this->data_penduduk_mod->get_data_rt_perkec('BANJARMASIN UTARA');
		$kec = $data->row_array();

		$ats = array ('TITLE'=> 'Kecamatan | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_kec', $kec);
        $this->load->view('template/bawah');
    }
	public function kelurahan()
	{
		$data = $this->data_penduduk_mod->get_data_rt_perkel('SUNGAI MIAI');

		$ats = array ('TITLE'=> 'Kelurahan | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_kel', $data);
        $this->load->view('template/bawah');
    }
	public function kitas()
	{
        $this->load->view('index_kitas');
    }
	public function kelahiran()
	{
        $this->load->view('index_lhr');
    }
	public function status()
	{
        $this->load->view('index_status');
    }
	public function wni()
	{
        $this->load->view('index_wni');
    }



    public function tes_fpdf()
	{
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(40,10,'Hello World!');
        $pdf->Output();
    }
	
}
