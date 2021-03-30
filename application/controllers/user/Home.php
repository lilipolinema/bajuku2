<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');

	}

	public function index()
	{
		$pria = array('kategori_produk' => 'pria');
		$wanita = array('kategori_produk' => 'wanita');
		$data['produkPria'] = $this->user->edit_data($pria, 'produk')->result();
		$data['produkWanita'] = $this->user->edit_data($wanita, 'produk')->result();
		$this->load->view("user/home",$data);
	}

	public function pria()
	{
		$where = array('kategori_produk' => 'pria');
		$data['produkPria'] = $this->user->edit_data($where, 'produk')->result();
		$this->load->view("user/pria",$data);
	}

	public function wanita()
	{
		$where = array('kategori_produk' => 'wanita');
		$data['produkWanita'] = $this->user->edit_data($where, 'produk')->result();
		$this->load->view("user/wanita",$data);
	}

	public function tentang()
	{
		$this->load->view('user/tentang');
	}

	public function detail_produk($id)
	{
		$where = array('id_produk' => $id);
 		$data['dataProduk'] = $this->user->edit_data($where,'produk')->result();
 		$data['produk'] = $this->user->get_data_barang()->result();
 		$this->load->view('user/produk',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('guest');
	}
	public function bantuan()
	{
		$this->load->view('user/bantuan');
	}

	public function cekstatus()
	{
		$this->load->view('user/cekstatus');
	}

	public function lacak()
	{
		$this->load->view('user/lacak');
	}

	public function konfirmasiP()
	{
		$this->load->view('user/konfirmasiP');
	}
	public function batal_pesanan()
	{
		$this->load->view('user/batal_pesanan');
	}
	public function pembayaran()
	{
		$this->load->view('user/pembayaran');
	}
	public function cs()
	{
		$this->load->view('user/cs');
	}
}
?>