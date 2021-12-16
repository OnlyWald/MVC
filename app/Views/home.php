<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Beranda MVC PHP</title>
</head>
<body>
    <div class="header bg-secondary">
        <h2 class="ms-5 pt-1 text-light">Selamat Datang di MVC Framework PHP</h2>
        <hr />
    </div>
    <div class="conten">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span class="badge bg-secondary">PHP (PHP: Hypertext Preprocessor)</span>
                </div>
                <div class="col-md-9">
                    <p>merupakan bahasa pemrograman server-side, maka script dari PHP nantinya akan diproses di server. Jenis server yang sering digunakan bersama dengan PHP antara lain Apache, Nginx, dan LiteSpeed. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span class="badge bg-secondary">MVC (Model View Controller) </span>
                </div>
                <div class="col-md-9">
                    <p>sebuah metode untuk membuat sebuah aplikasi dengan memisahkan data dari tampilan dan cara bagaimana memprosesnya. Dalam implementasinya kebanyakan kerangka kerja dalam aplikasi web adalah berbasis arsitektur MVC.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <span class="badge bg-secondary">Struktur Folder </span>
                </div>
                <div class="col-md-9">
                    <div class="col-md-3">
                        <img class="mb-4" src="<?php echo $GLOBALS['path'] ?>/assets/images/mvc.png" alt="" width="300">
                    </div>
                    
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <a href="<?php echo $GLOBALS['path'] ?>login" class="btn btn-success pe-4 ps-4">LOGIN</a>
            </div>
        </div>
    </div>
    <div class="footer">
        <hr />
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-4">
                Margaretha Ekaristi Yobela
                </div>
                <div class="col-md-4">
                Julieta Adhelia Pratiwi
                </div>
                <div class="col-md-4">
                Wahyu Aldiwidianto
                </div>
            </div>
        </div>
    </div>
</body>
</html>