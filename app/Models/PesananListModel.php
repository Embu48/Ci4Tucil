<?php
namespace App\Models;

use CodeIgniter\Model;

class PesananListModel extends Model{
    protected $table = "pesanan";
    public function getPesanan($id = false){
        if($id == false){
            return $this->table('pesanan')
            ->get()
            ->getResultArray();
        }else {
            return $this->table('pesanan')
            ->where('id', $id)
            ->get()
            ->getRowArray();
        }
    }
}