<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
   protected $table             ='film';
   protected $primaryKey        ='id';
   protected $useAutoIncrement  = true;
   protected $allowedFields       = ['nama_film', 'id_genre', 'duration', 'cover'];

   public function getFilm(){
    
    $data =[
        [
            "nama_film" => "Sewu Dino",
            "genre"     => "Horor",
            "duration"  => "1 jam 43 menit"
        ],
        [
            "nama_film" => "Fast And Forious X",
            "genre"     => "Action",
            "duration"  => "2 jam 9 menit"
        ],
        [
            "nama_film" => "Doraemon The Movie",
            "genre"     => "Fiction",
            "duration"  => "1 jam 9 menit"
        ],
        [
            "nama_film" => "Miracle In Cell No 7",
            "genre"     => "Drama",
            "duration"  => "2 jam 15 menit"
        ],
        [
            "nama_film" => "JKT48 Anniversary Concert",
            "genre"     => "Music",
            "duration"  => "4 Jam 30 Menit"
        ]
      ];
      return $data;
   }

   public function getAllDataJoin(){
    $query = $this->db->table("film")
        ->select("film.*, genre.nama_genre")
        ->join("genre", "genre.id_genre = film.id_genre");
        return $query->get()->getResultArray();
   }

   public function genre($data){
    return $this->where("genre", $data)->findAll;
   }

}

