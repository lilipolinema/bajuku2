<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model {

	public function login($username,$password)
    {
        $this->db->select('username,password');
        $this->db->from('login_admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        }else{
            return false;
        }
    }

    //member

    public function getAllMember()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function cariMember(){
        $keyword=$this->input->post('keyword');
        $this->db->like('nama_lengkap', $keyword);
        $this->db->or_like('username', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('no_telepon', $keyword);
        return $this->db->get('user')->result_array();
    }

    public function datatablesMember()
    {
        $query = $this->db->order_by('id_user','DESC')->get('user');
        return $query->result();  
    }

    public function tambahMember()
    {
        $data=[
            "username" => $this->input->post('username',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "password" => md5($this->input->post('password',true)),
            "nama_lengkap" => $this->input->post('nama_lengkap',true),
            "email" => $this->input->post('email',true),
            "no_telepon" => $this->input->post('no_telepon',true)
        ];
        //$this->db->insert('Table', $object)
        $this->db->insert('user', $data);
    }

    public function getMemberByID($id_user){
        return $this->db->get_where('user',['id_user'=>$id_user])->row_array();
    }

    public function ubahmember(){
        $data=[
            "username" => $this->input->post('username',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "password" => md5($this->input->post('password',true)),
            "nama_lengkap" => $this->input->post('nama_lengkap',true),
            "email" => $this->input->post('email',true),
            "no_telepon" => $this->input->post('no_telepon',true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function hapusmember($id_user){
        $this->db->where('id_user', $id_user);
        $this->db->delete('user');
    }

    //produk

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

    public function tambahProduk($data)
    {
        $insert_data['id_produk'] = $data['id_produk'];
        $insert_data['nama_produk'] = $data['nama_produk'];
        $insert_data['harga_produk'] = $data['harga_produk'];
        $insert_data['ukuran_produk'] = $data['ukuran_produk'];
        $insert_data['jenis_kain'] = $data['jenis_kain'];
        $insert_data['kategori_produk'] = $data['kategori_produk'];
        $insert_data['gambar_produk'] = $data['gambar_produk'];

        $query = $this->db->insert('produk', $insert_data);
    }

    public function getProdukByID($id_produk){
        return $this->db->get_where('produk',['id_produk'=>$id_produk])->row_array();
    }

    public function ubahproduk(){
        $data=[
            "id_produk" => $this->input->post('id_produk',true), // ini sama dengan htmlspecialchars($_POST['nama])
            "nama_produk" => md5($this->input->post('nama_produk',true)),
            "harga_produk" => $this->input->post('harga_produk',true),
            "ukuran_produk" => $this->input->post('ukuran_produk',true),
            "jenis_kain" => $this->input->post('jenis_kain',true),
            "kategori_produk" => $this->input->post('kategori_produk',true)
        ];
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->update('produk', $data);
    }

    public function hapusproduk($id_produk){
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }

    //pemesanan
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

    //transaksi
    public function getAllTransaksi()
    {
            $this->db->select('transaksi.*,pemesanan.id_pemesanan as id_pemesanan');
            $this->db->join('pemesanan', 'pemesanan.id_pemesanan = transaksi.id_pemesanan');
            $this->db->from('transaksi');
            $query = $this->db->get();
            return $query->result_array();
    }

    public function cariTransaksi(){
        $keyword=$this->input->post('keyword');
        $this->db->like('status_bayar', $keyword);
        return $this->db->get('transaksi')->result_array();
    }

    public function datatablesTransaksi()
    {
        $query = $this->db->order_by('id_transaksi','DESC')->get('transaksi');
        return $query->result();  
    }

    public function getTransaksiByID($id_transaksi){
        $this->db->select('transaksi.*,pemesanan.id_pemesanan as id_pemesanan');
            $this->db->join('pemesanan', 'pemesanan.id_pemesanan = transaksi.id_pemesanan');;
            return $this->db->get_where('transaksi',['id_transaksi'=>$id_transaksi])->row_array();
    }

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */
?>