<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penjualan_model extends CI_Model
{

	function penjualan_view()
	{
		$sql = "SELECT  
				a.Jumlah,
				b.NamaBarang,
				a.Tahun,
				a.Id as PenjualanId,
				a.Bulan
				
		
				FROM  penjualan a 
				join barang b on a.BarangId = b.Id
				where
				a.DeletedBy IS NULL 
				Order BY a.Id DESC
				-- b.DeletedBy IS NULL
				 ";

		return $this->db->query($sql)->result();
	}

	function penjualan_add($params)
	{

		$this->db->insert('penjualan', $params);
		return $this->db->insert_id();
	}

	function penjualan_delete($Id, $params)
	{
		$this->db->where('Id', $Id);
		return $this->db->update('penjualan', $params);
	}

	function penjualan_getid($id)
	{
		$sql = "SELECT * FROM penjualan WHERE Id='$id'";

		return $this->db->query($sql)->row_array();
	}

	function penjualan_update($Id, $params)
	{

		$this->db->where('Id', $Id);
		return $this->db->update('penjualan', $params);
	}
}
