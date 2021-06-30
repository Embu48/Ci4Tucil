<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukListModel;
use App\Models\ProdukModel;
use App\Models\RestockModel;
use App\Models\RestockListModel;

class Embu extends Controller
{
	public function index()
	{
		$session = session();
        if($session->get('admin_in')){
			$model1 = new ProdukListModel();
			$model2 = new RestockListModel();
			$data['data1'] = $model1->getProduk();
			$data['data2'] = $model2->getRestock();
			//echo view("Admin/header");
			//echo view('Admin/barang', $data);
			//echo view("Admin/footer");
			echo view("Part/header-2");
            echo view("Part/sidebar-a");
	        echo view("Admin/barang-2", $data);
            echo view("Part/footer-2");
		}else{
			return redirect()->to('/login');
		}
	}
	public function tambah($nama, $stok){
		$session = session();
		if($session->get('admin_in')){
			$model = new ProdukModel();
            $data = [
                'barang'   => $nama,
                'stok' => $stok,
            ];
            $model->save($data);
            return redirect()->to('/embu');
		}else{
			return redirect()->to('/login');
		}
	}
	public function edit($id)
	{
		$model = new ProdukListModel();
		$data['produk'] = $model->getProduk($id);
        echo view("Part/header-2");
        echo view("Part/sidebar-a");
		echo view('Admin/edit-2', $data);
		echo view("Part/footer-2");
	} 

	public function update($id)
	{
		$model = new ProdukModel();
		$barang = $this->request->getPost('barang');
		$stok = $this->request->getPost('stok');
	
		$data = [
			'barang' => $barang,
			'stok' => $stok
		];
	
		$ubah = $model->update_product($data, $id);
		
		if($ubah)
		{
			session()->setFlashdata('info', 'Updated product successfully');
			return redirect()->to(base_url('embu')); 
		}
	} 

	public function hapus($id)
    {
        $model = new ProdukModel();
        $hapus = $model->delete_product($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Embu'));
        }
	} 
	public function TerimaRestock($id)
    {
        $model1 = new RestockModel();
        $data1 = [
            'status' => 'Diterima'
        ];
        $ubah = $model1->update_product($data1, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Embu')); 
        }
    } 

    public function Tolakrestock($id)
    {
        $model = new RestockModel();
        $data = [
            'status' => 'Dibatalkan'
        ];
        $ubah = $model->update_product($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Embu')); 
        }
    }

    public function HapusRestock($id)
    {
        $model = new RestockModel();
        $hapus = $model->delete_product($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Embu'));
        }
    } 
}
