<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haikutron | Contemplative Haiku Bot</title>
    <meta name="description" content="Haikutron just wants to write some cool haiku, give him some space meatbags.">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
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
    <body>
        <?php include_once('inc/haiku.php') ?>
        <section class="haiku">
            <div class="wrapper">
                 <h1><?php echo $title; ?></h1>
                 <p>
                     <?php echo $haiku; ?>
                 </p>
            </div>
        </section>
    </body>
</html>
