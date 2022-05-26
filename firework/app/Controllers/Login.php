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
    $model      = new User();
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $builder = $model->table('users')->where('email', $email);
    $data = $builder->get()->getResult();
    $dataArray = get_object_vars($data[0]);

    // print_r($dataArray);
    // print_r($password);
    // print_r($email);
    // print_r($dataArray['password']);

    if ($dataArray) {
      $pass = $dataArray['password'];
      $hashed = password_hash($pass, PASSWORD_DEFAULT);
      $verify = password_verify($password, $hashed);
      if ($verify) {
        $session_data = [
          'id' => $dataArray['id_user'],
          'username' => $dataArray['username'],
          'email' => $dataArray['email'],
          'phone' => $dataArray['phone'],
          'logged_in'  => true
        ];
        $session->set($session_data);
        return redirect()->to('/home');
      } else {
        $session->setFlashdata('msg', 'password anda salah');
        return redirect()->to('/');
      }
    } else {
      $session->setFlashdata('msg', 'email tidak ditemukan');
      return redirect()->to('/');
    }
  }
}
