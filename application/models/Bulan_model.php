<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bulan_model extends CI_Model
{

	function bulan_view()
	{
		$sql = "SELECT  
				*
		
				FROM  bulan
				
				-- b.DeletedBy IS NULL
				 ";

		return $this->db->query($sql)->result();
	}
}
