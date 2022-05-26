<?php

namespace App\Models;

use CodeIgniter\Model;

class Item extends Model
{
  protected $table = 'inventories';
  protected $allowedFields = ['id_barang', 'id_user', 'jenis_barang', 'nama_barang', 'jumlah_barang', 'harga_satuan'];
}
