<?php namespace App\Models;
 
use CodeIgniter\Model;
class ProdukModel extends Model{
    protected $table = 'produk';
    protected $allowedFields = ['barang','stok','created_at'];
    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}