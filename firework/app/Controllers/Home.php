<?php

namespace App\Controllers;

use App\Models\Item;
use Config\App;

class Home extends BaseController
{
    public function index()
    {

        $session = \Config\Services::session();

        

        $Items = new Item();
        $item = $Items->findAll();

        $data = [
            "title" => "halaman index",
            "items" => $item
        ];

        return view('pages/home', $data);
    }
}
