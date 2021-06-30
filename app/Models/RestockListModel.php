<?php
namespace App\Models;

use CodeIgniter\Model;

class RestockListModel extends Model{
    protected $table = "restock";
    public function getRestock($id = false){
        if($id == false){
            return $this->table('restock')
            ->get()
            ->getResultArray();
        }else {
            return $this->table('restock')
            ->where('id', $id)
            ->get()
            ->getRowArray();
        }
    }
}