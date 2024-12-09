<?php

namespace App\Models;
use CodeIgniter\Model;

class M_belajar extends Model
{
	public function tampil($table)
	{
		return $this->db->table($table)
						->get()
						->getResult();
	}

	public function join($table, $table2, $on)
	{
		return $this->db->table($table)
						->join($table2, $on)
						->get()
						->getResult();
	}

	public function input($table, $data)
	{
		return $this->db->table($table)
						->insert($data);
	}

	public function hapus($table, $data)
	{
		return $this->db->table($table)
						->delete($data);
	}

	public function getWhere($table, $where)
	{
		return $this->db->table($table)
						->getWhere($where)
						->getRow();
	}

	public function edit($table, $data, $where)
	{
		return $this->db->table($table)
						->update($data, $where);
	}

	public function joinw($table, $table2, $on, $w)
	{
		return $this->db->table($table)
						->join($table2, $on)
						->where($w)
						->get()
						->getRow();
	}

	public function filter($table, $table2, $on, $filter1, $filter2, $awal, $akhir)
	{
		return $this->db->table($table)
						->join($table2, $on)
						->where($filter1, $awal)
						->where($filter2, $akhir)
						->get()
						->getResult();
	}

	public function filter2($table, $table2, $table3,  $on, $on2, $filter1, $filter2, $awal, $akhir)
	{
		return $this->db->table($table)
						->join($table2, $on)
						->join($table3, $on2)
						->where($filter1, $awal)
						->where($filter2, $akhir)
						->get()
						->getResult();
	}

	public function getCostumer()
	{
		$query = $this->db->table('costumer')
        				  ->select('costumer.*, user.username, user.level')
        				  ->join('user', 'costumer.id_user = user.id_user', 'left') 
        				  ->get();

    	return $query->getResult(); 
	}

	public function getPenjoki()
	{
		$query = $this->db->table('penjoki')
        				  ->select('penjoki.*, user.username, user.level')
        				  ->join('user', 'penjoki.id_user = user.id_user', 'left') 
        				  ->get();

    	return $query->getResult(); 
	}

	public function join2()
	{
		return $this->db->table('order')
						->join('costumer','order.id_costumer=costumer.id_costumer')
						->join('penjoki','order.id_penjoki=penjoki.id_penjoki')
						->get()
						->getResult();
	}

	public function join3()
	{
		return $this->db->table('rating')
						->join('costumer','rating.id_costumer=costumer.id_costumer')
						->join('penjoki','rating.id_penjoki=penjoki.id_penjoki')
						->get()
						->getResult();
	}
}