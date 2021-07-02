<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use CodeIgniter\HTTP\Request;

class ProdukController extends BaseController
{
    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
    }

    public function etalase()
    {
        $data = [
            'produk' => $this->produkModel->getProduk()
        ];
        return view('etalase', $data);
    }
}
