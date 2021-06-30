<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\RestockModel;
 
class Restock extends Controller
{
    public function index($barang)
    {
        $session = session();
        if($session->get('user_in')){
            return redirect()->to('/user');
        }else if($session->get('admin_in')){
            helper(['form']);
            $data['barang'] = $barang;
            //echo view("Admin/header");
            echo view("Part/header-2");
            echo view("Part/sidebar-a");
            echo view('Admin/restock-2', $data);
            //echo view("Admin/footer");
            echo view("Part/footer-2");
        } 
        else{
            return redirect()->to('/login');
        }
    }
 
    public function save($barang)
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'jumlah'         => 'required|integer',
        ];
         
        if($this->validate($rules)){
            $model = new RestockModel();
            $data = [
                'barang'    => $barang,
                'jumlah'     => $this->request->getVar('jumlah'),
                'status' => 'Sampai'
            ];
            $model->save($data);
            return redirect()->to('/embu');
        }else{
            $data['validation'] = $this->validator;
            echo view("User/header");
            echo view('User/pesanan', $data);
            echo view("User/footer");
        }
         
    }
 
}