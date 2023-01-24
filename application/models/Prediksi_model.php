<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prediksi_model extends CI_Model
{

	function prediksi_view($BarangId)
	{
		// $sql = "SELECT  
		// 		a.Id,
		// 		a.BarangId,
		// 		a.Jumlah,
		// 		SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 					 ORDER BY a.Tahun 
		// 						 ROWS 2 PRECEDING) AS JumlahM3,
		// 		SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 					 ORDER BY a.Tahun 
		// 						 ROWS 3 PRECEDING) AS JumlahM4,
		// 		SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 					 ORDER BY a.Tahun 
		// 						 ROWS 4 PRECEDING) AS JumlahM5,
		// 		a.Tahun,
		// 		b.Id as IdBarang,
		// 		b.NamaBarang,
		// 		b.Harga



		// 		FROM  penjualan a
		// 		join barang b on a.BarangId = b.Id
		// 		where
		// 		a.DeletedBy IS NULL and
		// 		a.BarangId = '$BarangId'
		// 		ORDER BY a.Tahun ASC
		// 		-- b.DeletedBy IS NULL
		// 		 ";
		$sql = "SELECT Tahun,Jumlah , Harga, SUM(Jumlah) OVER (PARTITION BY BarangId 
									ORDER BY Tahun 
										ROWS 2 PRECEDING) AS JumlahM3,
					SUM(Jumlah) OVER (PARTITION BY BarangId 
									ORDER BY Tahun 
										ROWS 3 PRECEDING) AS JumlahM4,
					SUM(Jumlah) OVER (PARTITION BY BarangId 
									ORDER BY Tahun 
										ROWS 4 PRECEDING) AS JumlahM5 FROM (
					SELECT Tahun, SUM(a.Jumlah) AS Jumlah, 
					MAX(a.BarangId) AS BarangId,
					MAX(b.Harga) AS Harga 
					FROM penjualan a
					JOIN barang b ON a.BarangId = b.Id
					WHERE
					a.DeletedBy IS NULL AND
					a.BarangId = '$BarangId'
					GROUP BY Tahun
					ORDER BY a.Tahun ASC
					) AS datum";

		return $this->db->query($sql)->result();
	}

	function firstYear($BarangId)
	{
		$sql = "SELECT a.Tahun FROM  penjualan a
		join barang b on a.BarangId = b.Id
		where
		a.DeletedBy IS NULL and
		a.BarangId = '$BarangId'
		ORDER BY a.Tahun ASC
		
				
				LIMIT 1
		";

		return $this->db->query($sql)->row_array();
	}

	function lastYear($BarangId)
	{
		$sql = "SELECT a.Tahun FROM  penjualan a
		join barang b on a.BarangId = b.Id
		where
		a.DeletedBy IS NULL and
		a.BarangId = '$BarangId'
		ORDER BY a.Tahun DESC
		LIMIT 1
		";

		return $this->db->query($sql)->row_array();
	}

	function hasilPrediksi_view($BarangId, $filterTahun)
	{
		// $sql = "SELECT * FROM(			
		// 			SELECT  
		// 			a.Id,
		// 			a.BarangId,
		// 			a.Jumlah,
		// 			SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 						ORDER BY a.Tahun 
		// 							ROWS 2 PRECEDING) AS JumlahM3,
		// 			SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 						ORDER BY a.Tahun 
		// 							ROWS 3 PRECEDING) AS JumlahM4,
		// 			SUM(a.Jumlah) OVER (PARTITION BY a.BarangId 
		// 						ORDER BY a.Tahun 
		// 							ROWS 4 PRECEDING) AS JumlahM5,
		// 			a.Tahun,
		// 			b.Id AS IdBarang,
		// 			b.NamaBarang,
		// 			b.Harga



		// 			FROM  penjualan a
		// 			JOIN barang b ON a.BarangId = b.Id
		// 			WHERE
		// 			a.DeletedBy IS NULL AND
		// 			a.BarangId = '$BarangId'
		// 			ORDER BY a.Tahun ASC ) 
		// 		AS datum WHERE Tahun = '$filterTahun' ";

		$sql = "SELECT Tahun,Jumlah , Harga, SUM(Jumlah) OVER (PARTITION BY BarangId 
						ORDER BY Tahun 
							ROWS 2 PRECEDING) AS JumlahM3,
				SUM(Jumlah) OVER (PARTITION BY BarangId 
						ORDER BY Tahun 
							ROWS 3 PRECEDING) AS JumlahM4,
				SUM(Jumlah) OVER (PARTITION BY BarangId 
						ORDER BY Tahun 
							ROWS 4 PRECEDING) AS JumlahM5 FROM (
				SELECT Tahun, SUM(a.Jumlah) AS Jumlah, 
				MAX(a.BarangId) AS BarangId,
				MAX(b.Harga) AS Harga 
				FROM penjualan a
				JOIN barang b ON a.BarangId = b.Id
				WHERE
				a.DeletedBy IS NULL AND
				a.BarangId = '$BarangId'
				GROUP BY Tahun
				) AS datum WHERE Tahun = '$filterTahun'
				";

		return $this->db->query($sql)->row_array();
	}
}
