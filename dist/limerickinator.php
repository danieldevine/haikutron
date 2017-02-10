<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Limericks | As Nature Intended</title>
    <meta name="description" content="Haikutron just wants to write some cool haiku, give him some space meatbags.">
    <link href="https://fonts.googleapis.com/css?family=Amatica+SC" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/global.min.css">
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-74880701-1', 'auto');
    ga('send', 'pageview');

    </script>
</head>
<?php     require '/kint-master/Kint.class.php';
    Kint::dump( $_SERVER ); ?>
    
    <?php include_once('inc/limerick.php');


        function rand_color() {
          return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }?>
    <body>
        <section class="haiku" style="background-color:<?php echo rand_color(); ?>; color:<?php echo rand_color() ?>;">
            <div class="wrapper">
                 <p> <?php echo $limerick; ?></p>
                 <div class="signed">-Limerickinator</div>
            </div>
        </section>
    </body>
</html>
<p>
    There was a man from killaloe
    who stepped in a massive dog poo
    he declared "I'm aware,
    I'm in Tipp, not in Clare"
    and in Ballina scraped clean his shoe
</p>
