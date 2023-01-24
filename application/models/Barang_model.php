<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Barang_model extends CI_Model
{

	function barang_view()
	{
		$sql = "SELECT  
				*
		
				FROM  barang
				where
				DeletedBy IS NULL 
				-- b.DeletedBy IS NULL
				 ";

		return $this->db->query($sql)->result();
	}

	function barang_add($params)
	{

		$this->db->insert('barang', $params);
		return $this->db->insert_id();
	}

	function barang_delete($Id, $params)
	{
		$this->db->where('Id', $Id);
		return $this->db->update('barang', $params);
	}

	function barang_getid($id)
	{
		$sql = "SELECT * FROM barang WHERE Id='$id'";

		return $this->db->query($sql)->row_array();
	}

	function barang_update($Id, $params)
	{

		$this->db->where('Id', $Id);
		return $this->db->update('barang', $params);
	}
}
