<?php namespace App\Models;
 
use CodeIgniter\Model;
class ProdukModel extends Model{
    protected $table = 'produk';
    protected $allowedFields = ['nama_barang','alamat_tujuan','kode_pos','created_at'];
}