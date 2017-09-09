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
require_once 'inc/functions.php';
?>
<body>
    <section class="haiku" style="background-color:<?php echo randColor(); ?>; color:<?php echo randColor(); ?>;">
        <div class="wrapper">
             <p><?php echo $limerick; ?></p>
             <div class="signed">-@limrixx '<?php echo date('y') ?> </div>
        </div>
    </section>
<?php 
require 'inc/tweet.php'; 
require 'layout/footer.php';
?>
