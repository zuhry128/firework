<?php

namespace App\Controllers;

class Coba extends BaseController
{
  public function index()
  {
    echo "Ini controller coba";
  }

  public function about($nama = '', $umur = '')
  {
    echo "hi, nama saya $nama dan umur saya $umur";
  }
}
