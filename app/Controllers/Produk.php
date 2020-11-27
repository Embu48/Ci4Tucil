<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{
	public function index()
	{
		$session = session();
        if($session->get('logged_in')){
			$model = new ProdukModel();
			$data['data'] = $model->getProduk();
			echo view("Admin/header");
			echo view('admin/barang', $data);
			echo view("Admin/footer");
		}else{
			return redirect()->to('/login');
		}
	}
	public function tambah($nama, $kota, $pos){
		$data['nama_barang'] = $nama;
		$data['kota_tujuan'] = $kota;
		$data['kode_pos'] = $pos;
		//$this->db->table('produk')->insert($data);
		$this->db->query("INSERT INTO produk (nama_barang, kota_tujuan, kode_pos) VALUES(:nama:, :kota:, :pos:)",$data);
		//return redirect()->to('/barang');

	}
}
