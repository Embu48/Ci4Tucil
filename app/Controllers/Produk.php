<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukListModel;
use App\Models\ProdukModel;

class Produk extends BaseController
{
	public function index()
	{
		$session = session();
        if($session->get('logged_in')){
			$model = new ProdukListModel();
			$data['data'] = $model->getProduk();
			echo view("Admin/header");
			echo view('admin/barang', $data);
			echo view("Admin/footer");
		}else{
			return redirect()->to('/login');
		}
	}
	public function tambah($nama, $kota, $pos){
		$session = session();
		if($session->get('logged_in')){
			$model = new ProdukModel();
            $data = [
                'nama_barang'   => $nama,
                'alamat_tujuan' => $kota,
                'kode_pos' => $pos
            ];
            $model->save($data);
            return redirect()->to('/produk');
		}else{
			return redirect()->to('/login');
		}
	}
}
