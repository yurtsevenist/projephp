<?php
include("php/connect.php");
$sorgu=$baglanti->query("SELECT * FROM about WHERE status=1",PDO::FETCH_ASSOC);
    foreach($sorgu as $veri)
    {        
        $title=$veri["title"];
        $motto=$veri["motto"];
        $content=$veri["content"];                  
    }

$pagename ="about";
include("layouts/header.php");
?>
        <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $title ?></h1>
                            <span class="subheading"><?php echo $motto ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?php echo $content ?></p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php
        include("layouts/footer.php");
        ?>