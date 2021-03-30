<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->model('user');
	}

	public function index()
	{
		$pria = array('kategori_produk' => 'pria');
		$wanita = array('kategori_produk' => 'wanita');
		$data['produkPria'] = $this->user->edit_data($pria, 'produk')->result();
		$data['produkWanita'] = $this->user->edit_data($wanita, 'produk')->result();
		$this->load->view("guest/index",$data);
	}

	public function pria()
	{
		$where = array('kategori_produk' => 'pria');
		$data['produkPria'] = $this->user->edit_data($where, 'produk')->result();
		$this->load->view("guest/pria",$data);
	}

	public function wanita()
	{
		$where = array('kategori_produk' => 'wanita');
		$data['produkWanita'] = $this->user->edit_data($where, 'produk')->result();
		$this->load->view("guest/wanita",$data);
	}

	public function tentang()
	{
		$this->load->view('guest/tentang');
	}

	public function detail_produk($id)
	{
		$where = array('id_produk' => $id);
 		$data['dataProduk'] = $this->user->edit_data($where,'produk')->result();
 		$data['produk'] = $this->user->get_data_barang()->result();
 		$this->load->view('guest/produk',$data);
	}

	public function login()
	{
		if($this->user->is_logged_in()){
			redirect("user/home");
		}
		else{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			$this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px"> <div class="header"><b>< class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

			if($this->form_validation->run() == TRUE){

				$username = $this->input->post("username", TRUE);
				$password = MD5($this->input->post('password', TRUE));

				$checking = $this->user->check_login('user', array('username' => $username), array('password' => $password));

				if ($checking != FALSE){
					foreach ($checking as $apps) {
						$session_data = array(
							'user_id' 	=> $apps->id_user,
							'username' => $apps->username,
							'password' => $apps->password,
							'nama_lengkap' => $apps->nama_lengkap
						);

					$this->session->set_userdata($session_data);
					redirect('user/home/');						
					}
				}
				else {
					$data['error']= '<div class="alert alert-danger" style="margin-top: 3px"> <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
					$this->load->view('guest/index', $data);
				}
			}
			else{
				$this->load->view('guest/index');
			}
		}
	}

	public function daftar()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_telepon = $this->input->post('no_telepon');

		$data = array(
			'username' => $username,
			'password' => $password,
			'nama_lengkap' => $nama,
			'no_telepon' => $no_telepon,
			'email' => $email
			);

		$this->user->input_data($data,'user');
		redirect('guest');
	}
	public function bantuan()
	{
		$this->load->view('guest/bantuan');
	}

	public function cekstatus()
	{
		$this->load->view('guest/cekstatus');
	}

	public function konfirmasi()
	{
		$this->load->view('guest/konfirmasi');
	}

	public function batal_pesanan()
	{
		$this->load->view('guest/batal_pesanan');
	}

	public function lacak()
	{
		$this->load->view('guest/lacak');
	}
	public function pembayaran()
	{
		$this->load->view('guest/pembayaran');
	}
	public function cs()
	{
		$this->load->view('guest/cs');
	}
}
?>