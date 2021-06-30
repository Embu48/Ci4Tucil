<?php namespace App\Models;
 
use CodeIgniter\Model;
class PesananModel extends Model{
    protected $table = 'pesanan';
    protected $allowedFields = ['nama','barang','account','tempat-lahir','tanggal-lahir','asal-sekolah','status'];
    public function update_product($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function delete_product($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}