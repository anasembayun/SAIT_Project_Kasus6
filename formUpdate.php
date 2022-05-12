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
<link href="../kasus3_movie/assets/dist/css/bootstrap.min.css" rel="stylesheet">



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
    <link href="../kasus3_movie/pricing.css" rel="stylesheet">
    </head>
    <body>
		<?php
            $id = $_GET['id'];
            $curl= curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            //Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
            curl_setopt($curl, CURLOPT_URL, 'http://192.168.56.101/sait_api/film_crud_api.php?id='.$id.'');
            $res = curl_exec($curl);
            $json = json_decode($res, true);
		//var_dump($json);
		?>
    
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
            <h2>Update Data</h2>
        </div>
        <div class="container" style="background-color:#F7F7F6; padding:40px;">  
            <form action="update.php" method="post" id="form">
                <div class="form-group">
                    <strong>Id :</strong>
                    <input type="text" name="id" class="form-control" placeholder="Id" value="<?php echo"$id";?>" >
                </div>
                <div class="form-group">
                    <strong>Judul Film :</strong>
                    <input type="text" name="judul" class="form-control" placeholder="Nama makanan" value="<?php echo($json["data"][0]["judul"]); ?>" >
                </div>
                <div class="form-group">
                    <strong>Genre :</strong>
                    <input type="text" name="genre" class="form-control" placeholder="Nama makanan" value="<?php echo($json["data"][0]["genre"]); ?>" >
                </div>
                <div class="form-group">
                    <strong>Tanggal Rilis :</strong>
                    <input type="text" name="tgl_rilis" class="form-control" placeholder="Harga" value="<?php echo($json["data"][0]["tgl_rilis"]); ?>" >
                </div>                      
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <a href="index.php" class="btn btn-primary">Cancel</a>
            </form>
        </div>
    </body>
    <br>
    
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <span class="text-muted">© 2022 Ana Sembayun, 464386</span>
        </div>
    </footer>
</html>


