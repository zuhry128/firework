<?php

namespace App\Controllers;

// use App\Models\Item;
// use Config\App;

class Home extends BaseController
{
    public function index()
    {
        if ($_SESSION['logged_in'] = true) {
            echo "welcome back";
        } else {
            echo "you are not logged in";
        }

        // $Items = new Item();
        // $item = $Items->findAll();

        // $data = [
        //     "title" => "halaman index",
        //     "items" => $item
        // ];

        // return view('pages/home', $data);
    }
}
