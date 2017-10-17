<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_penduduk_mod2 extends CI_Model {
 	function __construct() {
 		parent::__construct();
 	}
 	//-------------------------------- Perintah ----------------------------------
	function get_data_pend(){
		$q="SELECT COUNT(*) AS TOTAL, COUNT(CASE WHEN JK='PEREMPUAN' THEN 1 ELSE NULL END) AS PRM, COUNT(CASE WHEN JK='LAKI-LAKI' THEN 1 ELSE NULL END) AS LK 
			FROM V_CAPIL_WNI";
		return $this->db->query($q);
	}
	function get_data_agm($tahun_entri=""){
		$q="SELECT COUNT(CASE WHEN AGAMA='ISLAM' THEN 1 ELSE NULL END) AS ISLAM, 
			COUNT(CASE WHEN AGAMA='KRISTEN' THEN 1 ELSE NULL END) AS KRISTEN,
			COUNT(CASE WHEN AGAMA='KATHOLIK' THEN 1 ELSE NULL END) AS KATHOLIK,
			COUNT(CASE WHEN AGAMA='HINDU' THEN 1 ELSE NULL END) AS HINDU,
			COUNT(CASE WHEN AGAMA='BUDHA' THEN 1 ELSE NULL END) AS BUDHA,
			COUNT(CASE WHEN AGAMA='KHONGHUCU' THEN 1 ELSE NULL END) AS KHONGHUCU,
			COUNT(CASE WHEN AGAMA='KEPERCAYAAN' THEN 1 ELSE NULL END) AS KEPERCAYAAN
			FROM V_CAPIL_WNI
			WHERE EXTRACT(YEAR FROM TGL_ENTRI) LIKE '%$tahun_entri%'";
		return $this->db->query($q);
	}
	function get_data_rt_perkel($kel=""){ //NOT
		$q="SELECT COUNT(*) AS TOTAL_RT FROM
			(
				SELECT NO_RT FROM V_CAPIL_KK WHERE NAMA_KEL='$kel' GROUP BY NO_RT
			) S
			ORDER BY NO_RT";
		$data1 = $this->db->query($q);
		$data1_ = $data1->row_array();

		$q="SELECT COUNT(*) AS TOTAL_KEL FROM V_CAPIL_KEL";
		$data2 = $this->db->query($q);
		$data2_ = $data2->row_array();

		return array('TOTAL_RT' => $data1_['TOTAL_RT'], 'TOTAL_KEL' => $data2_['TOTAL_KEL']);
	}
	function get_data_rt_perkec(){ //NOT
		$q="SELECT SUM(TOTAL_RT) AS TOTAL_RT FROM
			(
				SELECT COUNT(*) AS TOTAL_RT, NAMA_KEL FROM
				(
					SELECT NAMA_KEL, NO_RT FROM V_CAPIL_KK WHERE NAMA_KEC='$kec'
				) S
				GROUP BY NAMA_KEL
			)";
			return $this->db->query($q);
	}
	function get_data_kel(){
		$q="SELECT NAMA_KEL, JML_PEND, PRIA, WANITA FROM V_CAPIL_AGANJK ORDER BY NAMA_KEL ASC";
		return $this->db->query($q);
	}
	function get_data_kec(){
		$q="SELECT NAMA_KEC, SUM(JML_PEND) AS JML_PEND, SUM(PRIA) AS PRIA, SUM(WANITA) AS WANITA FROM V_CAPIL_AGANJK GROUP BY NAMA_KEC";
			return $this->db->query($q);
	}
	function get_data_jk_kec($nama_kec=""){ //NOT
		$q="SELECT COUNT(CASE WHEN JK='PEREMPUAN' THEN 1 ELSE NULL END) AS PRM, COUNT(CASE WHEN JK='LAKI-LAKI' THEN 1 ELSE NULL END) AS LK FROM V_CAPIL_WNI
			WHERE NAMA_KEC='$nama_kec'";
			$data = $this->db->query($q);
			return $data->row();
	}
	function get_data_stat_kawin(){
		$q="SELECT SUM(BELUM_KAWIN) AS BK, SUM(KAWIN) AS K, SUM(CERAI_HIDUP) AS CH, SUM(CERAI_MATI) AS CM FROM V_CAPIL_STAT_KAWIN";
		return $this->db->query($q);
	}
	function get_data_pendidikan_tot(){
		$q="SELECT SUM(TIDAK_BLM_SEKOLAH) AS BLM_SEKOLAH, SUM(BELUM_TAMAT_SD_SEDERAJAT) AS BLM_TMT_SD, SUM(TAMAT_SD_SEDERAJAT) AS TMT_SD, SUM(SLTP_SEDERAJAT) AS SLTP, SUM(SLTA_SEDERAJAT) AS SLTA, SUM(D_I_II) AS D_I_II, SUM(DIII_SARJANA_MUDA) AS DIII, SUM(DIV_SI) AS SI, SUM(SII) AS SII, SUM(SIII) AS SIII 
			FROM V_CAPIL_PENDIDIKAN";
		return $this->db->query($q);
	}
	function get_data_usia($r_umur1="",$r_umur2=""){
		$q="SELECT COUNT(*) AS TOT_UMR FROM 
			(
			  SELECT ROUND(UMUR) AS UMR FROM
			  (
			    SELECT MONTHS_BETWEEN(SYSDATE, TGL_LHR)/12 AS UMUR FROM V_CAPIL_WNI
			  ) 
			) S
			WHERE S.UMR>='$r_umur1' AND S.UMR<='$r_umur2'";
		$data = $this->db->query($q);
		return $data->row();
	}
	function get_data_gol_darah(){
		$q="SELECT 
			COUNT(CASE WHEN GOL_DARAH='AB' THEN 1 ELSE NULL END) AS Gol_AB,
			COUNT(CASE WHEN GOL_DARAH='A' THEN 1 ELSE NULL END) AS Gol_A,
			COUNT(CASE WHEN GOL_DARAH='B' THEN 1 ELSE NULL END) AS Gol_B,
			COUNT(CASE WHEN GOL_DARAH='O' THEN 1 ELSE NULL END) AS Gol_O,
			COUNT(CASE WHEN GOL_DARAH='AB+' THEN 1 ELSE NULL END) AS Gol_AB_plus,
			COUNT(CASE WHEN GOL_DARAH='AB-' THEN 1 ELSE NULL END) AS Gol_AB_min,
			COUNT(CASE WHEN GOL_DARAH='A+' THEN 1 ELSE NULL END) AS Gol_A_plus,
			COUNT(CASE WHEN GOL_DARAH='A-' THEN 1 ELSE NULL END) AS Gol_A_min,
			COUNT(CASE WHEN GOL_DARAH='B+' THEN 1 ELSE NULL END) AS Gol_B_plus,
			COUNT(CASE WHEN GOL_DARAH='B-' THEN 1 ELSE NULL END) AS Gol_B_min,
			COUNT(CASE WHEN GOL_DARAH='O+' THEN 1 ELSE NULL END) AS Gol_O_plus,
			COUNT(CASE WHEN GOL_DARAH='O-' THEN 1 ELSE NULL END) AS Gol_O_min,
			COUNT(CASE WHEN GOL_DARAH='TIDAK TAHU' THEN 1 ELSE NULL END) AS Tidak_Tahu
			FROM V_CAPIL_WNI";
			return $this->db->query($q);
	}
	function tes(){
		$q="SELECT SUM(TIDAK_BLM_SEKOLAH) AS BLM_SEKOLAH, SUM(BELUM_TAMAT_SD_SEDERAJAT) AS BLM_TMT_SD, SUM(TAMAT_SD_SEDERAJAT) AS TMT_SD, SUM(SLTP_SEDERAJAT) AS SLTP, SUM(SLTA_SEDERAJAT) AS SLTA, SUM(D_I_II) AS D_I_II, SUM(DIII_SARJANA_MUDA) AS DIII, SUM(DIV_SI) AS SI, SUM(SII) AS SII, SUM(SIII) AS SIII 
			FROM V_CAPIL_PENDIDIKAN";
			$data = $this->db->query($q);
			return $data->result_array();

	}
}
?>
