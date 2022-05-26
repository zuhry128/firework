<?php

namespace App\Controllers;

// use App\Models\Item;
// use Config\App;

class Home extends BaseController
{
    public function index()
    {
        $session = session();
        echo "Welcome back, " . $session->get('username');

        // $Items = new Item();
        // $item = $Items->findAll();

        // $data = [
        //     "title" => "halaman index",
        //     "items" => $item
        // ];

        // return view('pages/home', $data);
    }
}
