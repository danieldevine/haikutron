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



/**
 * Stock limerick starting phrases
 * @var array
 */
$intro = array(
    'There once came a young ',
    'There was a young ',
    'There once came an old ',
    'There was an old '
);

/**
 * shuffle the starting phrases
 * @var array
 */
$shuffled    = shuffle($intro);

$limB        = new haikuTron("rel_trg=drink", 1);
$limOne      = new haikuTron("ml=person", 1);
$limTwo      = new haikuTron("rel_jjb=place", 2);

/**
 * The A rhyme
 * @var string
 */
$rhymeA      = $limTwo->haWord();

/**
 * The B rhyme
 * @var string
 */
$rhymeB      = $limB->haWord();

$limThree    = new haikuTron("rel_trg=" . $rhymeA . "", 2);
/**
 * vars that rhyme with the previous line endings (AA BB A)
 * @var string
 */
$limATwo     = new haikuTron("rel_rhy=" . $rhymeA . "", 2);
$limBTwo     = new haikuTron("rel_rhy=" . $rhymeB . "", 1);
$limAThree   = new haikuTron("rel_rhy=" . $rhymeA . "", 2);

$limFour     = new haikuTron("rel_trg=drink", 2);
$limFive     = new haikuTron("rel_trg=drink", 1);

$limSix      = new haikuTron("ml=" . $rhymeA . "", 2);
$limSeven    = new haikuTron("rel_trg=drink", 1);

$limEight    = new haikuTron("rel_trg=drink", 1);
$limNine     = new haikuTron("rel_trg=drink", 1);
$limTen      = new haikuTron("rel_trg=drink", 1);

$limEleven   = new haikuTron("rel_trg=drink", 1);
$limTwelve   = new haikuTron("mrel_trg=drink", 3);
$limFourteen = new haikuTron("rel_trg=drink", 2);


/**
 * Builds the Limerick
 * @var string
 */
$limerick    = $intro[0] . $limOne->haWord() . " from " . $rhymeA . "<br />" .
"Who " . $limThree->haWord() . " a " .$limFour->haWord() . " " . $limFive->haWord() . " " . $limATwo->haWord() . "<br />" .
$limSix->haWord() . " " . $limSeven->haWord() . " " . $rhymeB . "<br />" .
$limEight->haWord() . " " . $limNine->haWord() . " " . $limTen->haWord() . " " . $limBTwo->haWord() . "<br />" .
$limEleven->haWord() . " " . $limTwelve->haWord() . " " . $limFourteen->haWord() . " " . $limAThree->haWord();


/**
 * tweet the mutha
 */
include_once('inc/tweet.php');
