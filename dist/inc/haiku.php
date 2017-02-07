<?php

/**
 * Rules of haiku:
 * 5 syllables
 * 7 syllables
 * 5 syllables
 */

include_once('inc/class.jerkHaiku.php');

$titleOne     = new jerkHaiku("rel_jjb=science", 4);
$titleTwo     = new jerkHaiku("rel_jjb=animal", 2);

$hkOneOne     = new jerkHaiku("rel_jjb=science", 2);
$hkOneTwo     = new jerkHaiku("rel_jjb=man", 1);
$hkOneThree   = new jerkHaiku("ml=scientist", 2);

$hkTwoOne     = new jerkHaiku("rel_jjb=science", 3);
$hkTwoTwo     = new jerkHaiku("rel_jjb=technology", 1);
$hkTwoThree   = new jerkHaiku("ml=physics", 3);

$hkThreeOne   = new jerkHaiku("rel_jjb=robot", 2);
$hkThreeTwo   = new jerkHaiku("ml=the", 1);
$hkThreeThree = new jerkHaiku("ml=science", 2);

$title = $titleOne->haWord() . $titleTwo->haWord();

$haiku =  $hkOneOne->haWord() . $hkOneTwo->haWord() . $hkOneThree->haWord() . "<br />" . $hkTwoOne->haWord() . $hkTwoTwo->haWord() . $hkTwoThree->haWord() . "<br />" . $hkThreeOne->haWord() . $hkThreeTwo->haWord() . $hkThreeThree->haWord() . "<br />"; ?>
