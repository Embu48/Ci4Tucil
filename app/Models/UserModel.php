<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    protected $table = 'users';
    protected $allowedFields = ['name','email','role','password','user_created_at'];
    public function getUser($id = false){
        if($id == false){
            return $this->table('users')
            ->get()
            ->getResultArray();
        }else {
            return $this->table('users')
            ->where('id', $id)
            ->get()
            ->getRowArray();
        }
    }
}