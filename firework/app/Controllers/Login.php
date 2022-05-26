<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'halaman login',
    ];

    return view('pages/login', $data);
  }
}
