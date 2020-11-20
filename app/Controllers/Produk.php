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
			echo view ('produk/index', $data);
		}else{
			return redirect()->to('/login');
		}
	}

	//--------------------------------------------------------------------

}
