<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RenderBarcode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('Ciqrcode');
		$this->load->library('Zend');
		$this->load->library('coba');
	}
	public function index()
	{	
		$data['title'] = 'Qrcode dan Barcode Codeigniter 3';
		$data['mahasiswa'] = $this->db->get('tb_mahasiswa')->result();
		$this->load->view('render', $data, FALSE);
	}

	public function qrcode($kode)
	{
		// gunakan library qrcode
		QRcode::png($kode, $outfile=false, $level = QR_ECLEVEL_H , $size = 6, $margin = 2 );
	}

	public function barcode($kode)
	{
		$this->zend->load('Zend/Barcode');
		Zend_Barcode::render('code128', 'image', ['text' => $kode]);
	}

}

/* End of file Barcode.php */
/* Location: ./application/controllers/Barcode.php */