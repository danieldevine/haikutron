<?php
/**
 * Rules of haiku:
 * 5 syllables
 * 7 syllables
 * 5 syllables
 * 0 humans
 * 
 * PHP Version 7.1
 *
 * @category Haiku
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

require_once 'inc/class.HaikuTron.php';

$titleOne     = new HaikuTron("rel_jjb=science", 4);
$titleTwo     = new HaikuTron("rel_jjb=animal", 2);

$hkOneOne     = new HaikuTron("rel_jjb=science", 2);
$hkOneTwo     = new HaikuTron("rel_jjb=man", 1);
$hkOneThree   = new HaikuTron("ml=scientist", 2);

$hkTwoOne     = new HaikuTron("rel_jjb=quantum", 3);
$hkTwoTwo     = new HaikuTron("rel_jjb=technology", 1);
$hkTwoThree   = new HaikuTron("ml=physics", 3);

$hkThreeOne   = new HaikuTron("rel_jjb=robot", 2);
$hkThreeTwo   = new HaikuTron("ml=the", 1);
$hkThreeThree = new HaikuTron("ml=humanity", 2);

$title = "( " . $titleOne->haWord() . " " . $titleTwo->haWord() . " ) \n";

$haiku = "\n" . $hkOneOne->haWord() . " " . $hkOneTwo->haWord() .
 " " . $hkOneThree->haWord() . "\n" . $hkTwoOne->haWord() . " " .
$hkTwoTwo->haWord() . " " . $hkTwoThree->haWord() . "\n" . 
$hkThreeOne->haWord() . " " . $hkThreeTwo->haWord() . " " .
$hkThreeThree->haWord() . "\n";
?>
