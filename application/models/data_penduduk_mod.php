<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_penduduk_mod extends CI_Model {
 	function __construct() {
 		parent::__construct();
 	}
 	//-------------------------------- Perintah ----------------------------------
	function get_data_pend(){
		$q="SELECT COUNT(*) AS TOTAL, COUNT(CASE WHEN JK='PEREMPUAN' THEN 1 ELSE NULL END) AS PRM, COUNT(CASE WHEN JK='LAKI-LAKI' THEN 1 ELSE NULL END) AS LK 
			FROM V_CAPIL_WNI";
		return $this->db->query($q);
	}
	function get_data_agm(){
		$q="SELECT SUM(ISLAM) AS ISLAM, SUM(KRISTEN) AS KRISTEN, SUM(KATHOLIK) AS KATHOLIK, SUM(HINDU) AS HINDU, SUM(BUDHA) AS BUDHA, SUM(KHONGHUCU) AS KHONGHUCU, SUM(KEPERCAYAAN) AS KEPERCAYAAN 
			FROM V_CAPIL_AGAMA";
		return $this->db->query($q);
	}
	function get_data_rt_perkel($kel=""){
		$q="SELECT COUNT(*) AS TOTAL_RT FROM
			(
				SELECT NO_RT FROM V_CAPIL_KK WHERE NAMA_KEL='$kel' GROUP BY NO_RT
			) S
			ORDER BY NO_RT";
		return $this->db->query($q);
	}
	function get_data_rt_perkec($kec=""){
		$q="SELECT SUM(TOTAL_RT) AS TOT_RT FROM
			(
				SELECT COUNT(*) AS TOTAL_RT, NAMA_KEL FROM
				(
					SELECT NAMA_KEL, NO_RT FROM V_CAPIL_KK WHERE NAMA_KEC='$kec'
				) S
				GROUP BY NAMA_KEL
			)"
			return $this->db->query($q);
	}

}
?>
