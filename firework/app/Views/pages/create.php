<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-8">
      <h2>Form tambah data inventory</h2>
      <?= $validation->listErrors(); ?>
      <form action="/inventory/save" method="POST">
        <?= csrf_field(); ?>
        <div class="mb-3">
          <label for="itemName" class="form-label">masukkan nama barang</label>
          <input type="text" class="form-control" id="itemName" name="itemName">
        </div>
        <div class="mb-3">
          <label for="itemType" class="form-label">masukkan jenis barang</label>
          <input type="text" class="form-control" id="itemType" name="itemType">
        </div>
        <div class="mb-3">
          <label for="itemQty" class="form-label">masukkan jumlah barang</label>
          <input type="text" class="form-control" id="itemQty" name="itemQty">
        </div>
        <button type="submit" class="btn btn-primary">Tambah data</button>
      </form>
    </div>
  </div>
</div>
<?= $this->endsection(); ?>