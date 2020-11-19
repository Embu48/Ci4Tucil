<?php namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                    [
                        'nama_produk' => 'baju',
                        'deskripsi_produk'    => 'lengan panjang'
                    ],
                    [    
                        'nama_produk' => 'celana',
                        'deskripsi_produk'    => 'celana pendek'
                    ],
                ];
                $this->db->table('produk')->insertBatch($data);
                // Simple Queries
                //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                 //       $data
               // );

                // Using Query Builder
               // $this->db->table('users')->insert($data);
        }
}