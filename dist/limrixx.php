<?php
$title = "Limerick | Limericks ";
$description = "Limrixx is going to tweet some limericks and you can't stop them. Made in Limerick.";
include_once('layout/head.php');
include_once('inc/limerick.php');
    function rand_color() {
      return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    }?>
<body>
    <section class="haiku" style="background-color:<?php echo rand_color(); ?>; color:<?php echo rand_color(); ?>;">
        <div class="wrapper">
             <p><?php echo $limerick; ?></p>
             <div class="signed">-@limrixx '<?php echo date('y') ?> </div>
        </div>
    </section>
<?php include_once('inc/tweet.php'); ?>
<?php include_once('layout/footer.php'); ?>
