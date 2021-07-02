<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    protected $useTimestamps = true;
    // protected $allowedFields = ['mhs_nama', 'mhs_urutan', 'mhs_asalsekolah', 'mhs_alamat'];

    public function getProduk($produk_id = false)
    {
        if ($produk_id == false) {
            return $this->findAll();
        }
        return $this->where(['produk_id' => $produk_id])->first();
        // return $mahasiswa;
    }
}
