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

		$data = $this->data_penduduk_mod->get_data_pendidikan_tot();
		$pendidikan = $data->row_array();

		$pend_ar = array(
			'TOT_PRM'=> $pend['PRM'], 
			'TOT_LK'=> $pend['LK'],
			'TOTAL' => $pend['TOTAL'],
			'BLM_SEKOLAH' => $pendidikan['BLM_SEKOLAH'],
			'BLM_TMT_SD' => $pendidikan['BLM_TMT_SD'],
			'TMT_SD' => $pendidikan['TMT_SD'],
			'SLTP' => $pendidikan['SLTP'],
			'SLTA' => $pendidikan['SLTA'],
			'D_I_II' => $pendidikan['D_I_II'],
			'DIII' => $pendidikan['DIII'],
			'SI' => $pendidikan['SI'],
			'SII' => $pendidikan['SII'],
			'SIII' => $pendidikan['SIII'],
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
    public function pekerjaan()
	{
        $this->load->view('index_kerja');
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
	public function kelahiran()
	{
		$data = $this->data_penduduk_mod->get_data_rt_perkel('SUNGAI MIAI');

		$ats = array ('TITLE'=> 'Kelahiran dan Kematian | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_lhr', $data);
        $this->load->view('template/bawah');
    }
	public function status()
	{
		$data = $this->data_penduduk_mod->get_data_stat_kawin();
		$status = $data->row_array();

		$ats = array ('TITLE'=> 'Status Kawin | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index_status', $status);
        $this->load->view('template/bawah');
    }
	public function wni()
	{
        $this->load->view('index_wni');
    }
    public function kitas()
	{
        $this->load->view('index_kitas');
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
