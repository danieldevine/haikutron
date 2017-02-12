<?php
$title = "Haikutron | Contemplative Haiku Bot";
$description = "Haikutron just wants to write some cool haiku, give him some space meatbags.";
include_once('layout/head.php');
include_once('inc/haiku.php');
    function rand_color() {
      return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }?>
<body>
    <section class="haiku" style="background-color:<?php echo rand_color(); ?>; color:<?php echo rand_color() ?>;">
        <div class="wrapper">
             <h1><?php echo $title; ?></h1>
             <hr />
             <p> <?php echo $haiku; ?></p>
             <div class="signed">-Haikutron</div>
        </div>
    </section>
<?php include_once('layout/footer.php'); ?>
