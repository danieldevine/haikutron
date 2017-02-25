<?php
$title = "Haikutronix | Haikutronix ";
$description = "This page is the non human friendly version of Haikutronix for crontabbing and tweeting";
include_once('layout/head.php');
include_once('inc/haiku.php');
    function rand_color() {
      return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }?>
<body>
    <section class="haiku" style="background-color:<?php echo rand_color(); ?>; color:<?php echo rand_color() ?>;">
        <div class="wrapper">
             <h1 class="haiku--title"><?php echo $title; ?></h1>
             <hr />
             <p class="haiku--body"><?php echo $haiku; ?></p>
             <div class="signed">-@Haikutronix</div>
        </div>
    </section>
<?php include_once('inc/tweet-haiku.php'); ?>
<?php include_once('layout/footer.php'); ?>
