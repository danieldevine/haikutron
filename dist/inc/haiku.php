<?php

/**
 * Rules of haiku:
 * 5 syllables
 * 7 syllables
 * 5 syllables
 * 0 humans
 */

include_once('inc/class.haikuTron.php');

$titleOne     = new haikuTron("rel_jjb=science", 4);
$titleTwo     = new haikuTron("rel_jjb=animal", 2);

$hkOneOne     = new haikuTron("rel_jjb=science", 2);
$hkOneTwo     = new haikuTron("rel_jjb=man", 1);
$hkOneThree   = new haikuTron("ml=scientist", 2);

$hkTwoOne     = new haikuTron("rel_jjb=quantum", 3);
$hkTwoTwo     = new haikuTron("rel_jjb=technology", 1);
$hkTwoThree   = new haikuTron("ml=physics", 3);

$hkThreeOne   = new haikuTron("rel_jjb=robot", 2);
$hkThreeTwo   = new haikuTron("ml=the", 1);
$hkThreeThree = new haikuTron("ml=humanity", 2);

$title = $titleOne->haWord() . " " . $titleTwo->haWord();


$haiku =  $hkOneOne->haWord() . " " . $hkOneTwo->haWord() . " " . $hkOneThree->haWord() . "<br />" . $hkTwoOne->haWord() . " " . $hkTwoTwo->haWord() . " " . $hkTwoThree->haWord() . "<br />" . $hkThreeOne->haWord() . " " . $hkThreeTwo->haWord() . " " . $hkThreeThree->haWord() . "<br />"; ?>
