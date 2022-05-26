<?php

namespace App\Controllers;

use App\Models\User;

class Register extends BaseController
{
  public function index()
  {
    helper(['form']);
    $data = [
      'title' => 'halaman register',

    ];
    return view('pages/register', $data);
  }

  public function create()
  {

    $data = [
      'title' => 'halaman register',

    ];

    $user = new User();

    $user->save([
      'username' => $this->request->getPost('newUsername'),
      'email' => $this->request->getPost('newEmail'),
      'phone' => $this->request->getPost('newPhone'),
      'password' => $this->request->getPost('newPassword')
    ]);
    return view('pages/login', $data);
  }
}
