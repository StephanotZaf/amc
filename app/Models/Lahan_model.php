<?php
	namespace App\Models;

	use CodeIgniter\Model;

	class Lahan_model extends Model
	{
		protected $table = 'lahan';
		protected $primaryKey = 'lahan_id';
		protected $allowedFields = [
			'idareal',
			'kode_lokasi',
			'area_regional',
			'kode_provinsi',
			'kode_witel',
			'nama_lokasi',
			'alamat_lokasi',
			'provinsi',
			'kota',		
			'kecamatan',
			'desa',	
			'latitude',
			'longitude',
			'peruntukan'
		];
		protected $validationRules = [
			'idreal'        			=> 'required',
			'kode_lokasi'				=> 'required',
			'area_regional'				=> 'required',
			'kode_provinsi'				=> 'required',
			'kode_witel'				=> 'required',
			'nama_lokasi'   			=> 'required',
			'alamat_lokasi'				=> 'required',
			'provinsi'					=> 'required',
			'kota'						=> 'required',
			'kecamatan'					=> 'required',
			'desa'      				=> 'required',
			'latitude'  				=> 'required',
            'longitude'                 => 'required',
			'peruntukan'				=> 'required'
		];	
	}
?>
