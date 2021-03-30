<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model
{
	public function is_logged_in()
	{
		return $this->session->userdata('username');
	}

	public function check_login($table, $field1, $field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		}
		else{
			return $query->result();
		}
	}

 	public function input_data($data,$table)
 	{
    	$this->db->insert($table,$data);
 	}

 	public function hapus_data($where,$table)
 	{
    	$this->db->where($where);
    	$this->db->delete($table);
 	}

	public function edit_data($where,$table)
	{
    	return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
  	{
    	$this->db->where($where);
      	$this->db->update($table,$data);
  	}

  	public function get_data_barang()
  	{
  		return $this->db->get('produk');
  	}

  	public function get_lastId()
  	{
		return $this->db->query("SELECT * FROM pemesanan ORDER BY id_pemesanan DESC LIMIT 1");
	}

	public function showall($tb,$prop)
	{
    	return $this->db->query("SELECT * FROM $tb $prop");
  	}
}
?>