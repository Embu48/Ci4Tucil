<?php namespace App\Models;
 
use CodeIgniter\Model;
class RestockModel extends Model{
    protected $table = 'restock';
    protected $allowedFields = ['barang','jumlah','status'];
    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}