<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$id = $this->input->post('id');
		$where = array('id_produk' => $id);
		$data['dataProduk'] = $this->user->edit_data($where,'produk')->result();
		$data['idPemesanan'] = $this->user->get_lastId()->result();
		$this->load->view('user/order',$data);
	}

	public function tambah_order()
	{
		$id_pemesanan = $this->input->post('id_order');
		$id_user = $this->input->post('id_user');
		$id_produk = $this->input->post('id_produk');
		$jumlah = $this->input->post('jumlah');
		$harga = $this->user->showall('produk', "WHERE id_produk = '$id_produk' ")->row();
		$metode_bayar = $this->input->post('metode');
		$alamat = $this->input->post('alamat');
		$kode_bayar = random_string('alnum',16);
		$total = $jumlah * $harga->harga_produk;

		$data_order = array(
			'id_pemesanan' => $id_pemesanan,
			'id_user' => $id_user,
			'id_produk' => $id_produk,
			'jumlah_beli' => $jumlah,
			'total_bayar' => $total,
			'metode_bayar' => $metode_bayar,
			'alamat_kirim' => $alamat,
			'kode_bayar' => $kode_bayar 
		);

		$this->user->input_data($data_order,'pemesanan');

		$where = array('id_pemesanan' => $id_pemesanan );
		$data['dataPesanan'] = $this->user->edit_data($where,'pemesanan')->result();
		$this->load->view('user/konfirmasi',$data);
	}

	public function konfirm_bayar()
	{
		$konfirm = $this->user->showall('pemesanan',"WHERE id_pemesanan = '$_POST[id_order]'")->row();
		$kode_bayar = $konfirm->kode_bayar;
		$kode = $this->input->post('kode');
		$id_pemesanan = $this->input->post('id_order');
		$status_bayar = 'LUNAS';
		$status_kirim = 'PROSES KIRIM';

		$data = array(
			'id_pemesanan' => $id_pemesanan,
			'status_bayar' => $status_bayar,
			'status_pengiriman' => $status_kirim
		);

		if ($kode == $kode_bayar) {
			$this->user->input_data($data,'transaksi');
			redirect("user/home");	
		}

		else {
			$data['error']= '<div class="alert alert-danger" style="margin-top: 3px"> <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Kode Bayar salah!</div></div>';
			$this->load->view('user/konfirmasi', $data);
		}
	}
}
?>