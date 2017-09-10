<?php
/**
 * The interface for Limrixx
 *
 * PHP Version 7.1
 *
 * @category Limrixx
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

$title = "Limerick | Limericks ";
$description = "Limrixx is going to tweet some limericks and you can't stop them. Made in Limerick.";
require 'layout/head.php';
require 'inc/limerick.php';
?>
<body>
    <section class="haiku" style="background-color:<?php echo randColor(); ?>; color:<?php echo randColor(); ?>;">
        <div class="wrapper">
             <p class="haiku--body"><?php echo $limerick; ?></p>
             <div class="signed">-@limrixx '<?php echo date('y') ?> </div>
        </div>
             <a href="#" class="button--tweet">Approve</a>
             <a href="#" class="button--reload">Reset</a>
    </section>

             <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    $('.button--reload').on('click', function (e) {
                        e.preventDefault();
                        window.location.reload();
                    });
                    $('.button--tweet').on('click', function (e) {
                        e.preventDefault();
                        var limerick = $('p').text();
                        $.ajax({
                                url: '/inc/tweet-limerick.php',
                                type: 'POST',
                                data: {
                                    limerick: limerick
                                },
                        })
                        .done(function (data) {
                            $('.haiku--body').replaceWith('This Limerick has ben tweeted by @limrixx,<br /> click reset to see another.');
                            console.log(data);
                        })
                        .fail(function () {
                            console.log("error");
                        })
                        .always(function () {
                            console.log("complete");
                        });
                    });
                });
             </script>
<?php
require 'layout/footer.php';
?>
