<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="" style="background-image: url('assets/img/bg.png'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand fs-6" href="index.html">
                    <img src="assets/favicon.png" width="40px" alt="" srcset="">
                    &nbsp;Mustafa <b class="text-warning">YURTSEVEN</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menü
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 <?php if($pagename=="index"){ echo 'text-warning';} ?> "  href="index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 <?php if($pagename=="about"){ echo 'text-warning';} ?>" href="about.php">Hakkımda</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 <?php if($pagename=="post"){ echo 'text-warning';} ?>" href="post.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4 <?php if($pagename=="contact"){ echo 'text-warning';} ?>" href="contact.php">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->