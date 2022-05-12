<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>SAIT | KASUS 6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">
    <!-- Bootstrap core CSS -->
<link href="../sait_kasus3/assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>   
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">SAIT Kasus 6</h5>
  <nav class="my-2 my-md-0 mr-md-3">
  <a class="p-2 text-dark" href="filmWindows.php">Windows</a>
        <a class="p-2 text-dark" href="filmUbuntu.php">Ubuntu</a>
        <a class="p-2 text-dark" href="card_film_eksternal.php">Card Eksternal</a>
        <a class="p-2 text-dark" href="list_film_eksternal.php">Tabel Eksternal</a>
  </nav>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">List Film</h1>
  <p class="lead">Database Ubuntu</p>
</div>
<div class="container">
<a href="formTambah.php" class="btn btn-success pull-right" style="margin-bottom:15px;"></i>Tambah Data</a>
  <table class="table table-striped" border="1">
    <thead class="thead-dark" align="center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Judul Film</th>
            <th scope="col">Genre</th>
            <th scope="col">Tanggal Rilis</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $curl= curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, 'http://192.168.56.101/sait_api/get_film.php');
        $res = curl_exec($curl);
        $result = json_decode( $res, true );

        foreach( (array) $result as $row ) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['judul'] . "</td>";
            echo "<td>" . $row['genre'] . "</td>";
            echo "<td>" . $row['tgl_rilis'] . "</td>";
            echo "<td>";
                echo '<a href="formUpdate.php?id='. $row['id'] .'"class="btn btn-primary" style="margin:7px;">Update</a>'; 

                echo '<a href="delete.php?id='. $row['id'] . '"class="btn btn-danger" style="margin:7px;">Hapus</a>';
            echo "</td>";
        echo "</tr>";
    }
    ?>
    </tbody>
  </table>
</div>
<br>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="text-muted">© 2022 Ana Sembayun, 464386</span>
    </div>
  </footer>

  </body>
  </html>
