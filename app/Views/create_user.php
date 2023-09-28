<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Create user
      </a>
    </div>
  </nav>


  <div class="contrainer">
  <form action="<?=base_url('/user/store')?>" method="POST">
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama">
          
        </div>
      </div>

      <div class="mb-3 row">
        <label for="Npm" class="col-sm-2 col-form-label">Npm</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="npm" name="npm">
        </div>
      </div>

      <div class="mb-3 row">
        <label for="Kelas" class="col-sm-2 col-form-label">Kelas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
      </div>

      </div>
      <button type="submit" class="btn btn-primary" name="submit">Tambah Data</button>
      



    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>