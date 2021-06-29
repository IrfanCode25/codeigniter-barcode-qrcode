<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba
{
	protected $ci;
	public $jenis_kelamin = 'laki-laki';
	public function __construct()
	{
        $this->ci =& get_instance();
	}

	public function nama($nama)
	{
		return $nama;
	}

	

}

/* End of file Coba.php */
/* Location: ./application/libraries/Coba.php */
