<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\PesananListModel;
use App\Models\RestockListModel;
use App\Models\ProdukListModel;
use App\Models\UserModel;
 
class Admin extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('admin_in')){
            $model1 = new PesananListModel();
            $model2 = new ProdukListModel();
            $model3 = new RestockListModel();
            $model4 = new UserModel();
            $data['data1'] = $model1->getPesanan();
            $data['data2'] = $model2->getProduk();
            $data['data3'] = $model3->getRestock();
            $data['data4'] = $model4->getUser();
            //echo view("Admin/header");
            echo view("Part/header-2");
            echo view("Part/sidebar-a");
	        echo view("Admin/admin-2", $data);
            //echo view("Admin/footer");
            echo view("Part/footer-2");
        //echo "Welcome back, ".$session->get('user_name');
        }else{
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}