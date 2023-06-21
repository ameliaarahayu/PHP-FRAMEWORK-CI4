<?php

namespace App\Controllers;

use App\Controllers\BaseController;

//step 1
use App\Models\FilmModel;

class Film extends BaseController
{
    //step 2
    protected $film;                                                                                        
    //step 3 fungsi constract
    public function __construct()
    {
        //step 4
        $this->film = new FilmModel();
    }

    public function index()
    {
        //step 5
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }

    public function all()
    {
        $data['semuafilm'] = $this->film->getAllDataJoin();
        return view("film/semuafilm", $data);
    }

    public function genre(){
        dd($this->film->getDataBy("action"));
    }

    public function add()
    {
        return view("film/add");
    }

}
