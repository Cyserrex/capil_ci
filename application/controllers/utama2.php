<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama2 extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('data_penduduk_mod2');
    }
	public function index()
	{
		$data = $this->data_penduduk_mod2->get_data_pend();
		$pend = $data->row_array();

		$data = $this->data_penduduk_mod2->get_data_pendidikan_tot();
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
        $this->load->view('index2_utama', $pend_ar);
        $this->load->view('template/bawah');
	}
	public function agama()
	{
		$data = $this->data_penduduk_mod2->get_data_agm();
		$agm = $data->row_array();

		$ats = array ('TITLE'=> 'Agama | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index2_agm', $agm);
        $this->load->view('template/bawah');
    }
    public function pekerjaan()
	{
        $this->load->view('index2_kerja');
    }
	public function kecamatan()
	{
		$data = $this->data_penduduk_mod2->get_data_kec();
		$kecamatan = $data->row_array();

		$kec = array ('BJM_UTARA' => $kecamatan['BJM_UTARA'],
					'BJM_SELATAN' => $kecamatan['BJM_SELATAN'],
					'BJM_TIMUR' => $kecamatan['BJM_TIMUR'],
					'BJM_TENGAH' => $kecamatan['BJM_TENGAH'],
					'BJM_BARAT' => $kecamatan['BJM_BARAT'],
					'BJM_BARAT_LK' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN BARAT')->LK,
					'BJM_BARAT_PR' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN BARAT')->PRM,
					'BJM_TIMUR_LK' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN TIMUR')->LK,
					'BJM_TIMUR_PR' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN TIMUR')->PRM,
					'BJM_UTARA_LK' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN UTARA')->LK,
					'BJM_UTARA_PR' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN UTARA')->PRM,
					'BJM_SELATAN_LK' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN SELATAN')->LK,
					'BJM_SELATAN_PR' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN SELATAN')->PRM,
					'BJM_TENGAH_LK' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN TENGAH')->LK,
					'BJM_TENGAH_PR' => $this->data_penduduk_mod2->get_data_jk_kec('BANJARMASIN TENGAH')->PRM,
			);

		$ats = array ('TITLE'=> 'Kecamatan | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index2_kec', $kec);
        $this->load->view('template/bawah');
    }
	public function kelurahan()
	{
		$data = $this->data_penduduk_mod2->get_data_rt_perkel('SUNGAI MIAI');

		$ats = array ('TITLE'=> 'Kelurahan | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index2_kel', $data);
        $this->load->view('template/bawah');
    }
	public function kelahiran()
	{
		$data = $this->data_penduduk_mod2->get_data_rt_perkel('SUNGAI MIAI');

		$ats = array ('TITLE'=> 'Kelahiran dan Kematian | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index2_lhr', $data);
        $this->load->view('template/bawah');
    }
	public function status()
	{
		$data = $this->data_penduduk_mod2->get_data_stat_kawin();
		$status = $data->row_array();

		$ats = array ('TITLE'=> 'Status Kawin | Catatan Sipil');

        $this->load->view('template/atas', $ats);
        $this->load->view('index2_status', $status);
        $this->load->view('template/bawah');
    }
	public function wni()
	{
        $this->load->view('index2_wni');
    }
    public function kitas()
	{
        $this->load->view('index2_kitas');
    }
	
}
