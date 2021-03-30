
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manager extends CI_Controller {

    public  function __construct()
    {
        parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->model('manager_model');
    }
    public function index(){
        $data['title'] = 'Login';
		$this->load->view('manager/include/head');
		$this->load->view("manager/index");
		$this->load->view('manager/include/script');
    }

    public function proses_login()
    {
        
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars($this->input->post('password'));

        $cekLogin = $this->manager_model->login($username,$password);

        if ($cekLogin) {
            foreach ($cekLogin as $key){
                $this->session->userdata('username',$key->username);
                $this->session->userdata('password',$key->password);
            
                redirect('manager/home','refresh');
            }
        }else{
            $data['title'] = 'manager Bajuku | Login';
			$this->load->view('manager/include/head', $data);
			$this->load->view("manager/index");
			$this->load->view('manager/include/script');
        }
		
    }
    public function home()
	{
		$data['title'] = 'Home';
    	$this->load->view('manager/include/head', $data);
		$this->load->view('manager/include/header');
		$this->load->view('manager/include/sidebar');
		$this->load->view('manager/home');
		$this->load->view('manager/include/script');
		$this->load->view('manager/include/footer');
    }
    public function produk()
	{
        $data['title'] = 'Laporan Produk';
		$data['produk']=$this->manager_model->getAllProduk();
		
        $this->load->view('manager/include/head', $data);
		$this->load->view('manager/include/header');
		$this->load->view('manager/include/sidebar');
		$this->load->view('manager/laporan_produk');
		$this->load->view('manager/include/script');
		$this->load->view('manager/include/footer');
        
    }
    public function pemesanan()
    {
    	$data['title'] = 'Laporan Pemesanan';
		$data['pemesanan']=$this->manager_model->getAllPemesanan();
        if ($this->input->post('keyword')) {
            # code...
            $data['pemesanan']=$this->manager_model->caripemesanan();
        }
		$this->load->view('manager/include/head', $data);
		$this->load->view('manager/include/header');
		$this->load->view('manager/include/sidebar');
		$this->load->view('manager/laporan_pemesanan');
		$this->load->view('manager/include/script');
		$this->load->view('manager/include/footer');
		
    }
    public function detailpemesanan($id_pemesanan)
    {
        $data['title']='Detail Pemesanan';
        $data['pemesanan']=$this->manager_model->getPemesananByID($id_pemesanan);
        
        $this->load->view('manager/include/head', $data);
		$this->load->view('manager/include/header');
		$this->load->view('manager/include/sidebar');
		$this->load->view('manager/detailpemesanan');
		$this->load->view('manager/include/script');
		$this->load->view('manager/include/footer');
		
    }
    public function detailproduk($id_produk)
    {
        $data['title']=' Deatil Produk';
        $data['produk']=$this->manager_model->getProdukByID($id_produk);

        $this->load->view('manager/include/head', $data);
		$this->load->view('manager/include/header');
		$this->load->view('manager/include/sidebar');
		$this->load->view('manager/detailproduk');
		$this->load->view('manager/include/script');
		$this->load->view('manager/include/footer');
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('manager','refresh');
        
    }

    

}

/* End of file ModelName.php */
