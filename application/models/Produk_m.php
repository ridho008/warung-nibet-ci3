<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_m extends CI_Model {
	public function get($table)
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function insert($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function update($table, $data, $where)
	{
		$this->db->where($where);
		return $this->db->update($table, $data);
	}

	public function get_join($table1, $table2)
	{
		$this->db->join("$table2", "$table2.kategori_id = $table1.kategori_id");
		return $this->db->get('produk');
	}

	public function getProdukKeyword($keyword)
	{
		$this->db->join("kategori", "kategori.kategori_id = produk.kategori_id");
		$this->db->like('nama_produk', $keyword);
		return $this->db->get('produk');
	}

	public function getKategoriWhere($slug)
	{
		$this->db->join("kategori", "kategori.kategori_id = produk.kategori_id");
		$this->db->where('slug_kate', $slug);
		return $this->db->get('produk');
	}

	public function getDetailProdukWhere($slug)
	{
		$this->db->join("kategori", "kategori.kategori_id = produk.kategori_id");
		$this->db->where('slug', $slug);
		return $this->db->get('produk');
	}


}