<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyModel extends CI_Model{

	public function getnama()
	{
		$this->db->select('nama.id as id_nama, nama.nama as nama_orang, work.nama as nama_work, kategori.salary as salary');
		$this->db->join('work', 'nama.id_work = work.id');
		$this->db->join('kategori', 'nama.id_salary = kategori.id');
		$hasil = $this->db->get('nama');
		return $hasil->result();
	}

	public function getnamabyid($id)
	{
		$this->db->select('nama.*, nama.id as id_nama, nama.nama as nama_orang, work.nama as nama_work, kategori.salary as salary');
		$this->db->join('work', 'nama.id_work = work.id');
		$this->db->join('kategori', 'nama.id_salary = kategori.id');
		$this->db->where('nama.id', $id);
		$hasil = $this->db->get('nama');
		return $hasil->row();
	}

	public function getwork()
	{
		$hasil = $this->db->get('work');
		return $hasil->result();
	}

	public function getsalary()
	{
		$hasil = $this->db->get('kategori');
		return $hasil->result();
	}

	public function insertnama($data)
	{
		$this->db->insert('nama',$data);
	}

	public function hapusnama($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('nama');
	}

	public function updatenama($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('nama', $data);
	}

}