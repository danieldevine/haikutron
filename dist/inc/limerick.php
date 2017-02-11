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

require_once('inc/class.haikuTron.php');

$intro     = array(
    'There once came a young ',
    'There was a young ',
    'There once came an old ',
    'There was an old '
);
$shuffled  = shuffle($intro);
$limB      = new haikuTron("rel_trg=drink", 1);
$limOne    = new haikuTron("ml=person", 1);
$limTwo    = new haikuTron("rel_jjb=place", 2);
$rhymeA    = $limTwo->haWord();
$rhymeB    = $limB->haWord();
$limThree  = new haikuTron("rel_trg=" . $rhymeA . "", 2);
$limATwo   = new haikuTron("rel_rhy=" . $rhymeA . "", 2);
$limBTwo   = new haikuTron("rel_rhy=" . $rhymeB . "", 1);
$limAThree = new haikuTron("rel_rhy=" . $rhymeA . "", 2);
$limFour   = new haikuTron("ml=" . $rhymeB . "", 2);
$limFive   = new haikuTron("ml=" . $rhymeA . "", 1);

$limerick  = $intro[0] . $limOne->haWord() . " from " . $rhymeA . "<br />" .
"Who " . $limThree->haWord() . " a " .$limFour->haWord() . " " . $limFive->haWord() . " " . $limATwo->haWord() . "<br />" .
$rhymeB . "<br />" .
$limBTwo->haWord() . "<br />" .
$limAThree->haWord();
