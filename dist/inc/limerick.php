<?php

/**
 *
 * This page is secretly named 'fungus the dog'
 * because Nina said so.
 *
 */
require_once('inc/class.limrixx.php');

/**
 * Stock limerick starting phrases
 * @var array
 */
$intro = array(
    'There came a young ',
    'There was a young ',
    'There came an old ',
    'There was an old '
);

/**
 * shuffle the starting phrases
 * @var array
 */
$shuffled    = shuffle($intro);

$lineOne       = new limrixx("rel_spc=man", 2, "n");
$oneOne        = $lineOne->lxWord();
$lineTwo       = new limrixx("ml=city", 2, "n");
$oneTwo        = $lineTwo->lxWord();

$lineThree     = new limrixx("sp=*d", 2, "v");
$twoOne        = $lineThree->lxWord();
$lineFour      = new limrixx("ml=hope", 2, "n");
$twoTwo        = $lineFour->lxWord();
$lineFive      = new limrixx("rel_rhy=". $oneTwo, 3, "n");
$twoThree      = $lineFive->lxWord();


$lineSix       = new limrixx("ml=hope", 1, "n");
$threeOne      = $lineSix->lxWord();
$lineSeven     = new limrixx("ml=hope", 1, "v");
$threeTwo      = $lineSeven->lxWord();
$lineEight     = new limrixx("ml=hope", 1, "v");
$threeThree    = $lineEight->lxWord();
$lineNine      = new limrixx("ml=hope", 1, "n");
$threeFour     = $lineNine->lxWord();

$lineTen       = new limrixx("ml=hope", 1, "n");
$fourOne       = $lineTen->lxWord();
$lineEleven    = new limrixx("ml=hope", 1, "v");
$fourTwo       = $lineEleven->lxWord();
$lineTwelve    = new limrixx("ml=hope", 1, "n");
$fourThree     = $lineTwelve->lxWord();
$lineThirteen  = new limrixx("rel_rhy=". $threeFour, 1, "n");
$fourFour      = $lineThirteen->lxWord();

$lineFourteen  = new limrixx("ml=hope", 1, "n");
$fiveOne       = $lineFourteen->lxWord();
$lineFifteen   = new limrixx("ml=hope", 2, "v");
$fiveTwo       = $lineFifteen->lxWord();
$lineSixteen   = new limrixx("ml=hope", 2, "n");
$fiveThree     = $lineSixteen->lxWord();
$lineSeventeen = new limrixx("rel_rhy=". $oneTwo, 2, "n");
$fiveFour      = $lineSeventeen->lxWord();


/**
 * Builds the Limerick
 * @var string
 */
$limerick = $intro[0] . $oneOne . " from " . $oneTwo . "\n" .
"who " . $twoOne . " a " . $twoTwo ." ". $twoThree . "\n" .
$threeOne ." ". $threeTwo ." ". $threeThree ." ". $threeFour . "\n" .
$fourOne ." ". $fourTwo ." ". $fourThree ." ". $fourFour . "\n" .
$fiveOne ." ". $fiveTwo ." ". $fiveThree ." ". $fiveFour;
