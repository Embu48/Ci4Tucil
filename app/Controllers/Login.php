<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        $session = session();
        if($session->get('admin_in')){
            return redirect()->to('/admin');
        }
        else if($session->get('user_in')){
            return redirect()->to('/user');
        }else{
            helper(['form']);
            //echo view("Pre/header");
	        echo view("Pre/login-2");
	        //echo view("Pre/footer");
        }
    }   
   
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                if($data['role'] == 'admin'){
                    $ses_data = [
                        'id'       => $data['id'],
                        'name'     => $data['name'],
                        'email'    => $data['email'],
                        'admin_in'     => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/admin');
                }else{
                    $ses_data = [
                        'id'       => $data['id'],
                        'name'     => $data['name'],
                        'email'    => $data['email'],
                        'user_in'     => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/user');
                }
                
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
} 