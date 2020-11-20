<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class About extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('logged_in')){
            echo view('about');
        }else{
            return redirect()->to('/login');
        }
    }
}