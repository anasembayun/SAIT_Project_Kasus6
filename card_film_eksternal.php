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
    <link href="../sait_kasus6/assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <link href="../sait_kasus6/pricing.css" rel="stylesheet">
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
    <h1 class="display-4">List Film Popular</h1>
    <p class="lead">API Eksternal</p>
    </div>
    <div class="container">
        <div class="row">
            <?php
                $endPoint = "https://api.themoviedb.org/3/discover/movie?api_key=7164c5e9b5e74972308f97e603c808ea&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&with_watch_monetization_types=flatrate";
                $params = [
                    "api_key" => "7164c5e9b5e74972308f97e603c808ea",
                    "language" => "en-US",
                    "sort_by" => "popularity.desc",
                    "include_adult" => "false",
                    "include_video" => "false",
                    "page" => "1",
                    "with_watch_monetization_types" => "flatrate",
                    "format" => "json"
                ];
                    
                $url = $endPoint . "?" . http_build_query( $params );
                    
                $ch = curl_init( $url );
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                $output = curl_exec( $ch );
                curl_close( $ch );
                    
                $result = json_decode( $output, true );
                    
                foreach( $result["results"] as $value ) {
                    echo '<div class="col-sm-3 mb-3">';
                    echo '<div class="card">';
                    echo '<img src="https://image.tmdb.org/t/p/w500'.$value["poster_path"].'" class="card-img-top">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">'. $value["title"] .'</h5>';
                    echo '<p class="card-text">'. $value["overview"] .'</p>';
                    echo '</div>';
                    echo '<div class="card-footer">';
                    echo '<small class="text-muted">Post on '. $value["release_date"] .'</small>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';      
                }         
            ?>
        </div>   
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
