<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
   protected $table             ='genre';
   protected $primaryKey        ='id';
   protected $useAutoIncrement  = true;
   protected $allowFields       = [];
   
   public function getAllData()
   {
      return $this->findAll(); 
   }
   public function genre($data){
      return $this->where("genre", $data)->findAll;
   }
}


