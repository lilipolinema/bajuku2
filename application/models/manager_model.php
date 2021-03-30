
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manager_model extends CI_Model {

    public function login($username,$password){
        
        
        $this->db->select('username,password');
        $this->db->from('login_manager');
        $this->db->where('username',$username);
        $this->db->where('password',$password);
    

        $query=$this->db->get();
        if($query->num_rows()==1)
        {
            return $query->result();
        }else{
            return false;
        }
    }

    public function getAllProduk()
    {
        $query = $this->db->get('produk');
        return $query->result_array();
    }
    public function cariProduk(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama_produk', $keyword);
        $this->db->or_like('kategori_pproduk', $keyword);
        return $this->db->get('produk')->result_array();
    }
    public function datatablesProduk()
    {
        $query = $this->db->order_by('id_produk','DESC')->get('produk');
        return $query->result();  
    }
    public function getProdukByID($id_produk){
        return $this->db->get_where('produk',['id_produk'=>$id_produk])->row_array();
    }
    public function getAllPemesanan()
    {
            $this->db->select('pemesanan.*,user.nama_lengkap as nama_lengkap,produk.nama_produk as nama_produk');
            $this->db->join('user', 'pemesanan.id_user = user.id_user');
            $this->db->join('produk', 'produk.id_produk = pemesanan.id_produk');
            $this->db->from('pemesanan');
            $query = $this->db->get();
            return $query->result_array();
    }

    public function cariPemesanan(){
        $keyword=$this->input->post('keyword');
        $this->db->like('alamat_kirim', $keyword);
        return $this->db->get('pemesanan')->result_array();
    }

    public function datatablesPemesanan()
    {
        $query = $this->db->order_by('id_pemesanan','DESC')->get('pemesanan');
        return $query->result();  
    }

    public function getPemesananByID($id_pemesanan){
        $this->db->select('pemesanan.*,user.nama_lengkap as nama_lengkap,produk.nama_produk as nama_produk');
            $this->db->join('user', 'pemesanan.id_user = user.id_user');
            $this->db->join('produk', 'produk.id_produk = pemesanan.id_produk');
            return $this->db->get_where('pemesanan',['id_pemesanan'=>$id_pemesanan])->row_array();
    }


}

/* End of file ModelName.php */
