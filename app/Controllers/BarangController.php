<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang;

class BarangController extends BaseController
{
    public function index()
    {
        $barangModel = \Config\Database::connect();
        $data = [
            'title' => "Grafik Barang",
            'data'  => $barangModel
                ->query("SELECT merk,SUM(stok) AS stok FROM barang GROUP BY merk")
                ->getResultArray()
        ];

        echo view('view_barang',$data);
    }
}
