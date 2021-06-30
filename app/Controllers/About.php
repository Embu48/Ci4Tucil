<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class About extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('user_in')){
            echo view("User/header");
            echo view("User/about");
            echo view("User/footer");
        //echo "Welcome back, ".$session->get('user_name');
        }else{
            echo view("Pre/header");
            echo view("Admin/about");
            echo view("Pre/footer");
        }
    }
}