<?php

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController
{
  public function index()
  {
    helper(['form']);

    $data = [
      'title' => 'halaman login',
    ];

    return view('pages/login', $data);
  }

  public function auth()
  {

    $session = session();
    $db      = \Config\Database::connect();
    // $email = $this->request->getPost('email');
    $email = "azzuhry@gmail.com";
    $password = $this->request->getPost('password');
    $builder = $db->table('users')->where('email', $email);
    $query = $builder->getCompiledSelect();
    echo $query;


    // if ($data) {
    //   foreach ($data as $row) {
    //     $pass = $row;
    //   }
    //   $verify_pass = password_verify($password, $pass);
    //   if ($verify_pass) {
    //     $session_data = [
    //       'id' => $data['id_user'],
    //       'username' => $data['username'],
    //       'email' => $data['email'],
    //       'phone' => $data['phone'],
    //       'logged_in'  => true
    //     ];
    //     $session->set($session_data);
    //     return redirect()->to('/home');
    //   } else {
    //     $session->setFlashdata('msg', 'password anda salah');
    //     return redirect()->to('/');
    //   }
    // } else {
    //   $session->setFlashdata('msg', 'email tidak ditemukan');
    //   return redirect()->to('/');
    // }
  }
}
