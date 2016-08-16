<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {
public function GetMahasiswa(){
	$data=$this->db->query('select * from mahasiswa');
	return $data->result_array();
}
}
