<?php
$title = "Haikutron | Contemplative Haiku Bot";
$description = "Haikutron just wants to write some cool haiku, give him some space meatbags.";
include_once('layout/head.php');
include('inc/haiku.php');
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
             <a href="#" class="button--tweet">Approve</a>
             <a href="#" class="button--reload">Reset</a>
             <script type="text/javascript">

             jQuery(document).ready(function($) {

                 $('.button--reload').on('click', function(e) {
                     e.preventDefault();
                     window.location.reload();
                 });

                 $('.button--tweet').on('click', function(e) {

                 e.preventDefault();
                 var haikuText =  $('h1.haiku--title').text() + "-------" + $('p,haiku--body').text();

                     $.ajax({
                         url: '/inc/tweet-action.php',
                         type: 'POST',
                         data: { haiku: haikuText },

                     })
                     .done(function(data) {

                         $('.haiku--body').replaceWith('This haiku has ben tweeted by @haikutronix,<br /> click reset to see another.');

                     })
                     .fail(function() {
                         console.log("error");
                     })
                     .always(function() {
                         console.log("complete");
                     });

                 });

             });
             </script>
        </div>
    </section>
<?php include_once('layout/footer.php'); ?>
