<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data=$this->mymodel->GetMahasiswa();
		foreach ($data as $d) {
			echo "No Induk	:".$d['nim']."<br/>";
			echo "Nama		:".$d['nama']."<br/>";
			echo "Alamat	:".$d['alamat']."<hr/>";
		}
	}
}
