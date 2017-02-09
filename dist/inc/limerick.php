<?php

/**
 *
 * This page is secretly named 'fungus the dog'
 * because Nina said so.
 *
 * Rules of Limericks:
 * 8 syllables
 * 8 syllables
 * 5
 * 5
 * 8
 * AABBA
 *
 * 0 humans
 *
 */

include_once('inc/class.haikuTron.php');

$limOne   = new haikuTron("rel_jjb=There", 1);
$limTwo   = new haikuTron("rel_jjb=was", 1);
$limthree = new haikuTron("rel_jjb=a", 1);
$limFour  = new haikuTron("rel_jjb=young ", 1);
$limFive  = new haikuTron("rel_jjb=man", 1);
$limSix   = new haikuTron("rel_jjb=from", 1);
$limSeven = new haikuTron("rel_jjb=once", 2);

$onceWas = array('once', 'was');
$shuffled = shuffle($onceWas);

foreach ( $shuffled as $shuff ):
    return $shuff;
    break;
endforeach;

$title = $titleOne->haWord() . " " . $titleTwo->haWord();

$limerick = $limOne->haWord();
