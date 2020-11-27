<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class About extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('logged_in')){
            echo view("Admin/header");
            echo view("Admin/about");
            echo view("Admin/footer");
        //echo "Welcome back, ".$session->get('user_name');
        }else{
            echo view("Pre/header");
            echo view("Admin/about");
            echo view("Pre/footer");
        }
    }
}