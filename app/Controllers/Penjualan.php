<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PesananModel;
use App\Models\PesananListModel;
use App\Models\ProdukListModel;
 
class Penjualan extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('admin_in')){
            $model1 = new PesananListModel();
            $model2 = new ProdukListModel();
            $data['data1'] = $model1->getPesanan();
            $data['data2'] = $model2->getProduk();
            //echo view("Admin/header");
            echo view("Part/header-2");
            echo view("Part/sidebar-a");
	        echo view("Admin/penjualan-2", $data);
            //echo view("Admin/footer");
            echo view("Part/footer-2");
        //echo "Welcome back, ".$session->get('user_name');
        }else{
            return redirect()->to('/login');
        }
    }
    public function Info($id)
	{
		$model = new PesananListModel();
		$data['pendaftar'] = $model->getPesanan($id);
        echo view("Part/header-2");
        echo view("Part/sidebar-a");
		echo view('Admin/detail-daftar', $data);
		echo view("Part/footer-2");
	} 

    public function TerimaPesanan($id)
    {
        $model = new PesananModel();
        $data = [
            'status' => 'Diterima'
        ];
        $ubah = $model->update_product($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Penjualan')); 
        }

    } 

    public function CadanganPesanan($id)
    {
        $model = new PesananModel();
        $data = [
            'status' => 'Cadangan'
        ];
        $ubah = $model->update_product($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Penjualan')); 
        }

    } 

    public function TolakPesanan($id)
    {
        $model = new PesananModel();
        $data = [
            'status' => 'Ditolak'
        ];
        $ubah = $model->update_product($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated product successfully');
            return redirect()->to(base_url('Penjualan')); 
        }
    }

    public function HapusPesanan($id)
    {
        $model = new PesananModel();
        $hapus = $model->delete_product($id);
        if($hapus)
        {
            session()->setFlashdata('warning', 'Deleted product successfully');
            return redirect()->to(base_url('Penjualan'));
        }
    } 
}