<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PesananModel;
use App\Models\PesananListModel;
 
class Pesanan extends Controller
{
    public function index($barang)
    {
        $session = session();
        if($session->get('admin_in')){
            return redirect()->to('/admin');
        }else{
            helper(['form']);
            $data['barang'] = $barang;
            //echo view("User/header");
            echo view("Part/header-2");
            echo view("Part/sidebar-u");
            echo view('User/pesanan-2', $data);
            //echo view("User/footer");
            echo view("Part/footer-2");
        } 
    }
 
    public function save($barang)
    {
        $session = session();
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'nama'         => 'required',
            'tempat-lahir'         => 'required',
            'tanggal-lahir'         => 'required',
            'asal-sekolah'         => 'required',
        ];
         
        if($this->validate($rules)){
            $model = new PesananModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'account'   => $session->get('name'),
                'barang'    => $barang,
                'tempat-lahir'     => $this->request->getVar('tempat-lahir'),
                'tanggal-lahir'     => $this->request->getVar('tanggal-lahir'),
                'asal-sekolah'     => $this->request->getVar('asal-sekolah'),
                'status' => 'Sedang Proses'
            ];
            $model->save($data);
            return redirect()->to('/user');
        }else{
            $data['validation'] = $this->validator;
            $data['barang'] = $barang;
            echo view("Part/header-2");
            echo view("Part/sidebar-u");
            echo view('User/pesanan-2', $data);
            //echo view("User/footer");
            echo view("Part/footer-2");
        }
         
    }
    public function Info($id)
	{
		$model = new PesananListModel();
		$data['pendaftar'] = $model->getPesanan($id);
        echo view("Part/header-2");
        echo view("Part/sidebar-u");
		echo view('Admin/detail-daftar', $data);
		echo view("Part/footer-2");
	} 
    
 
}