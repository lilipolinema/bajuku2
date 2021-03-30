<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('admin_model');
	}

	public function index()
	{
		$data['title'] = 'Admin Bajuku | Login';
		$this->load->view('admin/include/head', $data);
		$this->load->view("admin/index");
		$this->load->view('admin/include/script');
	}

	public function dashboard()
	{
		$data['title'] = 'Admin Bajuku | Dashboard';
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

	//member
	public function member()
	{
		$data['title'] = 'Admin Bajuku | Member';
		$data['member']=$this->admin_model->getAllMember();
        if ($this->input->post('keyword')) {
            # code...
            $data['member']=$this->mahasiswa_model->cariMember();
        }
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/member', $data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

	public function tambahMember()
	{
		$data['title'] = 'Admin Bajuku | Tambah Member';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('no_telepon', 'no_telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/tambahmember');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }else {
            #code
            $this->admin_model->tambahMember();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('admin/member','refresh');
            
        }
		
	}

	public function editmember($id_user)
	{
        $data['title']='Admin Bajuku | Edit Member';
        $data['member']=$this->admin_model->getMemberByID($id_user);
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'nama', 'required');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('no_telepon', 'no_telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/editmember');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }else {
            #code
            $this->admin_model->ubahMember();
            $this->session->set_flashdata('flash-data','diubah');
            redirect('admin/member','refresh');
            
        }
	}

	public function hapusmember($id_user){
        $this->admin_model->hapusmember($id_user);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('admin/member','refresh');
    }

    //produk

    public function produk()
	{
		$data['title'] = 'Admin Bajuku | Produk';
		$data['produk']=$this->admin_model->getAllProduk();
        if ($this->input->post('keyword')) {
            # code...
            $data['produk']=$this->mahasiswa_model->cariproduk();
        }
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/produk', $data);
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
	}

    public function tambahproduk()
	{
		$this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required');
		$this->form_validation->set_rules('ukuran_produk', 'ukuran_produk', 'required');
		$this->form_validation->set_rules('jenis_kain', 'jenis_kain', 'required');
		$this->form_validation->set_rules('kategori_produk', 'kategori_produk', 'required');
		$data['title'] = 'Admin Bajuku | Tambah Produk';

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/tambahproduk');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        } else {
            $data['id_produk'] = $this->input->post('id_produk',TRUE);
            $data['nama_produk'] = $this->input->post('nama_produk',TRUE);
            $data['harga_produk'] = $this->input->post('harga_produk',true);
            $data['ukuran_produk'] = $this->input->post('ukuran_produk',true);
            $data['jenis_kain'] = $this->input->post('jenis_kain',true);
            $data['kategori_produk'] = $this->input->post('kategori_produk',true);

            $config['upload_path'] = APPPATH.'../assets/images/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size']  = '600000';
            $config['overwrite'] = FALSE;
            
            $this->load->library('upload', $config);

            $this->upload->initialize($config);
            
            
            if ( ! $this->upload->do_upload('gambar_produk')){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/produk', $error);
            }
            else{
               $upload_data = $this->upload->data();
               $data['gambar_produk'] = $upload_data['file_name'];
               $this->admin_model->tambahproduk($data);

            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('admin/produk','refresh');
            }
        }
	}

	public function detailproduk($id_produk)
    {
        $data['title']='Admin Bajuku | Deatil Produk';
        $data['produk']=$this->admin_model->getProdukByID($id_produk);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detailproduk');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

	public function editproduk($id_produk)
	{
        $data['title']='Admin Bajuku | Edit Produk';
        $data['produk']=$this->admin_model->getProdukByID($id_produk);
        $this->form_validation->set_rules('nama_produk', 'nama_produk', 'required');
		$this->form_validation->set_rules('harga_produk', 'harga_produk', 'required');
		$this->form_validation->set_rules('ukuran_produk', 'ukuran_produk', 'required');
		$this->form_validation->set_rules('jenis_kain', 'jenis_kain', 'required');
		$this->form_validation->set_rules('kategori_produk', 'kategori_produk', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('admin/include/head', $data);
			$this->load->view('admin/include/header');
			$this->load->view('admin/include/sidebar');
			$this->load->view('admin/editproduk');
			$this->load->view('admin/include/script');
			$this->load->view('admin/include/footer');
        }else {
            #code
            $this->admin_model->ubahproduk();
            $this->session->set_flashdata('flash-data','diubah');
            redirect('admin/produk','refresh');
            
        }
	}

	public function hapusproduk($id_produk){
        $this->admin_model->hapusproduk($id_produk);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('admin/produk','refresh');
    }

    //pemesanan
    public function pemesanan()
    {
    	$data['title'] = 'Admin Bajuku | Pemesanan';
		$data['pemesanan']=$this->admin_model->getAllPemesanan();
        if ($this->input->post('keyword')) {
            # code...
            $data['pemesanan']=$this->mahasiswa_model->caripemesanan();
        }
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/pemesanan');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    public function detailpemesanan($id_pemesanan)
    {
        $data['title']='Admin Bajuku | Deatil Pemesanan';
        $data['pemesanan']=$this->admin_model->getPemesananByID($id_pemesanan);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detailpemesanan');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    //transaksi
    public function transaksi()
    {
    	$data['title'] = 'Admin Bajuku | Transaksi';
		$data['transaksi']=$this->admin_model->getAllTransaksi();
        if ($this->input->post('keyword')) {
            # code...
            $data['transaksi']=$this->mahasiswa_model->caritransaksi();
        }
		$this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/transaksi');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

    public function detailtransaksi($id_transaksi)
    {
        $data['title']='Admin Bajuku | Deatil Transaksi';
        $data['transaksi']=$this->admin_model->getTransaksiByID($id_transaksi);
        
        $this->load->view('admin/include/head', $data);
		$this->load->view('admin/include/header');
		$this->load->view('admin/include/sidebar');
		$this->load->view('admin/detailtransaksi');
		$this->load->view('admin/include/script');
		$this->load->view('admin/include/footer');
    }

	//login
	public function proses_login()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cekLogin = $this->admin_model->login($username,$password);

        if ($cekLogin) {
            foreach ($cekLogin as $key){
                $this->session->userdata('username',$key->username);
                $this->session->userdata('password',$key->password);
            
                redirect('admin/dashboard','refresh');
            }
        }else{
            $data['title'] = 'Admin Bajuku | Login';
			$this->load->view('admin/include/head', $data);
			$this->load->view("admin/index");
			$this->load->view('admin/include/script');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('admin/index','refresh');
    }

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
?>