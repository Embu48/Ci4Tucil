<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class Admin extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('logged_in')){
            echo view("Admin/header");
	        echo view("Admin/admin");
	        echo view("Admin/footer");
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