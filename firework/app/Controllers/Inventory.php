<?php

namespace App\Controllers;

use App\Models\Item;

class Inventory extends BaseController
{
  public function index()
  {
    $items = new Item();
    $item = $items->findAll();
    return view('pages/barang');
  }

  public function create()
  {
    session();

    $data = [
      'title' => 'form tambah data inventory',
      'validation' => \Config\Services::validation()
    ];
    return view('pages/create', $data);
  }

  public function save()
  {
    if (!$this->validate([
      'itemName' => 'required|is_unique[barang.nama_barang]'
    ])) {
      $validation = \Config\Services::validation(); 
      return redirect()->to('/inventory/create')->withInput()->with('validation', $validation);
    }

    $newItem = new Item();
    $newItem->save([
      'jenis_barang' => $this->request->getVar('itemType'),
      'nama_barang' => $this->request->getVar('itemName'),
      'jumlah_barang' => $this->request->getVar('itemQty'),
      'harga_satuan' => $this->request->getVar('itemPrice'),
    ]);

    session()->setFlashdata('pesan', 'Data berhasil ditambahkan !');

    return redirect()->to('/');
  }
}
