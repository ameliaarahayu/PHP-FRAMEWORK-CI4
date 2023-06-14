<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\TheaterModel;

class Theater extends BaseController
{
   //step 2
   protected $theater;                                                                                   
   //step 3 fungsi constract
   public function __construct()
   {
       //step 4
       $this->theater = new TheaterModel();
   }

   public function index()
   {
       //step 5
       $data['data_theater'] = $this->theater->getTheater();
       return view("theater/index", $data);
   }
}