<?php
/**
 * This page is the non human friendly version of
 * Haikutronix for crontabbing and tweeting
 *
 * PHP Version 7.1
 *
 * @category Haiku
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

$title = "Haikutronix | Haikutronix ";
$description = "This page is the non human friendly version of Haikutronix for crontabbing and tweeting";
require_once 'layout/head.php' ;
require_once 'inc/haiku.php';
require_once 'inc/functions.php';
?>
<body>
    <section class="haiku" style="background-color:<?php echo randColor(); ?>; color:<?php echo randColor() ?>;">
        <div class="wrapper">
             <h1 class="haiku--title"><?php echo $title; ?></h1>
             <hr />
             <p class="haiku--body"><?php echo $haiku; ?></p>
             <div class="signed">-@Haikutronix</div>
        </div>
    </section>
<?php
require_once 'inc/tweet-haiku.php';
require_once 'layout/footer.php';
?>
