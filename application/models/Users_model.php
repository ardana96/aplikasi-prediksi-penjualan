<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{

	function user_view()
	{
		$sql = "SELECT  
				*
				FROM  admin
				where
				DeletedBy IS NULL 
				-- b.DeletedBy IS NULL
				 ";

		return $this->db->query($sql)->result();
	}

	function user_add($params)
	{

		$this->db->insert('admin', $params);
		return $this->db->insert_id();
	}

	function user_delete($Id, $params)
	{
		$this->db->where('Id', $Id);
		return $this->db->update('admin', $params);
	}

	function user_getid($id)
	{
		$sql = "SELECT * FROM admin WHERE Id='$id'";

		return $this->db->query($sql)->row_array();
	}

	function user_update($Id, $params)
	{

		$this->db->where('Id', $Id);
		return $this->db->update('admin', $params);
	}
}
