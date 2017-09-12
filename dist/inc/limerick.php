<?php
/**
 * This file is secretly named 'fungus the dog'
 * because Nina said so.
 *
 * PHP Version 7.1
 *
 * @category HaikuTron
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

require_once 'inc/class.Limrixx.php';

/**
 * Stock limerick starting phrases
 *
 * @var array
 */
$intro = array(
    'There came a young ',
    'There was a young ',
    'There came an old ',
    'There was an old ',
    'There once was a ',
    'There was a dumb '
);

/**
 * Shuffle the starting phrases
 *
 * @var array
 */
$shuffled      = shuffle($intro);

$theme         = "robot";

$lineOne       = new Limrixx("rel_spc=man", 2, "n");
$oneOne        = $lineOne->lxWord();
$lineTwo       = new Limrixx("rel_trg=".$theme, 2, "n");
$oneTwo        = $lineTwo->lxWord();
$lineThree     = new Limrixx("sp=*d", 2, "v");
$twoOne        = $lineThree->lxWord();
$lineFour      = new Limrixx("rel_trg=".$theme, 2, "n");
$twoTwo        = $lineFour->lxWord();
$lineFive      = new Limrixx("rel_rhy=". $oneTwo, 2, "n");
$twoThree      = $lineFive->lxWord();
$lineSix       = new Limrixx("rel_trg=".$theme, 1, "n");
$threeOne      = $lineSix->lxWord();
$lineSeven     = new Limrixx("rel_trg=".$theme, 1, "v");
$threeTwo      = $lineSeven->lxWord();
$lineEight     = new Limrixx("rel_trg=".$theme, 1, "v");
$threeThree    = $lineEight->lxWord();
$lineNine      = new Limrixx("rel_trg=".$theme, 1, "n");
$threeFour     = $lineNine->lxWord();
$lineTen       = new Limrixx("rel_trg=".$theme, 1, "n");
$fourOne       = $lineTen->lxWord();
$lineEleven    = new Limrixx("rel_trg=".$theme, 1, "v");
$fourTwo       = $lineEleven->lxWord();
$lineTwelve    = new Limrixx("rel_trg=".$theme, 1, "n");
$fourThree     = $lineTwelve->lxWord();
$lineThirteen  = new Limrixx("rel_rhy=". $threeFour, 1, "n");
$fourFour      = $lineThirteen->lxWord();
$lineFourteen  = new Limrixx("rel_trg=".$theme, 1, "n");
$fiveOne       = $lineFourteen->lxWord();
$lineFifteen   = new Limrixx("rel_trg=".$theme, 2, "v");
$fiveTwo       = $lineFifteen->lxWord();
$lineSixteen   = new Limrixx("rel_trg=".$theme, 2, "n");
$fiveThree     = $lineSixteen->lxWord();
$lineSeventeen = new Limrixx("rel_rhy=". $oneTwo, 2, "n");
$fiveFour      = $lineSeventeen->lxWord();

/**
 * Builds the Limerick
 *
 * @var string
 */
$limerick = $intro[0] . $oneOne . " from " . $oneTwo . "\n" .
"who " . $twoOne . " a " . $twoTwo ." so ". $twoThree . "\n" .
$threeOne ." ". $threeTwo ." ". $threeThree ." ". $threeFour . "\n" .
$fourOne ." ". $fourTwo ." ". $fourThree ." ". $fourFour . "\n" .
$fiveOne ." ". $fiveTwo ." ". $fiveThree ." a ". $fiveFour;
