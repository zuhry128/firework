<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="d-flex flex-row p-2">
      <a href="/inventory/create" class="btn btn-primary mt-2 mb-2 m-4">tambah data</a>
      <h1 class="p-0 m-0">Tabel inventaris</h1>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan') ?>
      <?php endif; ?>
      </div>
  </div>
</div>

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">id pemilik</th>
        <th scope="col">jenis barang</th>
        <th scope="col">nama barang</th>
        <th scope="col">jumlah barang</th>
        <th scope="col">harga satuan</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($items as $item) : ?>
        <tr>
          <th scope="row"><?= $item['id_barang'] ?></th>
          <td><?= $item['id_user'] ?></td>
          <td><?= $item['jenis_barang'] ?></td>
          <td><?= $item['nama_barang'] ?></td>
          <td><?= $item['jumlah_barang'] ?></td>
          <td><?= $item['harga_satuan'] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?= $this->endSection() ?>