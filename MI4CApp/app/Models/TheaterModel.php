<?php

namespace App\Models;

use CodeIgniter\Model;

class TheaterModel extends Model
{
    public function getTheater(){
    
        $data =[
            [
                "nama_theater" => "Aturan Anti Cinta",
                "sonichi"     => "20 Maret 2021",
                "durasi"  => "2 jam 15 menit"
            ],
            [
                "nama_theater" => "Tunas Dibalik Seragam",
                "sonichi"     => "29 Mei 2021",
                "durasi"  => "2 jam 5 menit"
            ],
            [
                "nama_theater" => "Banzai",
                "sonichi"     => "12 Maret 2022",
                "durasi"  => "2 jam 25 menit"
            ],
            [
                "nama_theater" => "Pajama Drive",
                "sonichi"     => "19 November 2022",
                "durasi"  => "1 jam 55 menit"
            ],
            [
                "nama_theater" => "Cara Meminum Ramune",
                "sonichi"     => "15 Januari 2023",
                "durasi"  => "2 jam 30 menit"
            ],
            [
                "nama_theater" => "Aitakatta",
                "sonichi"     => "30 April 2023",
                "durasi"  => "2 jam 10 menit"
            ]
          ];
          return $data;
       }
}
