<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title><?= $title ?></title>
</head>

<body class="vh-100 d-flex flex-col align-items-center justify-content-center">

  <div class="container col-5 shadow p-3 mb-5 bg-body rounded align-middle">
    <form action="/register/create" method="POST">
      <?= csrf_field(); ?>
      <div class="mb-3">
        <label for="registerUsername" class="form-label">masukkan username</label>
        <input type="text" class="form-control" id="newUsername" name="newUsername">
      </div>

      <div class="mb-3">
        <label for="registerEmail" class="form-label">masukkan alamat email</label>
        <input type="email" class="form-control" id="newEmail" name="newEmail">
      </div>

      <div class="mb-3">
        <label for="registerPhone" class="form-label">masukkan nomor hp</label>
        <input type="text" class="form-control" id="newPhone" name="newPhone">
      </div>

      <div class="mb-3">
        <label for="registerPassword" class="form-label">masukkan password</label>
        <input type="password" class="form-control" id="newPassword" name="newPassword">
      </div>
      <button type="submit" class="btn btn-primary w-100">create account</button>
      <div class="w-100 text-center mt-2 mb-2">
        <a href="/login" class="text-decoration-none">already have an account ?</a>
      </div>
    </form>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>