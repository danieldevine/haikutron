<?php
/**
 * The version of Limrixx for bot access only.
 *
 * @TODO Shocking level of code duplication. DRY UP.
 *
 * PHP Version 7.1
 *
 * @category Limrixx
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */


 $root     = $_SERVER["DOCUMENT_ROOT"];
 $site_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
 require $root . "/vendor/autoload.php";
 require $root . "/inc/functions.php";
 use Abraham\TwitterOAuth\TwitterOAuth;
 require_once $root . '/config/settings.php';
 require_once $root . '/inc/class.Limrixx.php';

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
     'There was a pure '
 );

 /**
  * Shuffle the starting phrases
  *
  * @var array
  */
 $shuffled      = shuffle($intro);

 /**
  * Let's dictate the overall mood!
  * Trial and error suggests its best
  * to be broad as possible to return the best results.
  *
  * @var string
  */
 $theme         = "mad";

 /**
  * So now let's write out the lines for the Limerick.
  * Refer to DataMuse docs for what each rel_* is doing.
  */
 $lineOne       = new Limrixx("rel_spc=human", 2, "n");
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
  * The assembled Limerick
  *
  * @var string
  */
 $limerick = $intro[0] . $oneOne . " from " . $oneTwo . "\n" .
 "who " . $twoOne . " a " . $twoTwo ." so ". $twoThree . "\n" .
 $threeOne ." ". $threeTwo ." ". $threeThree ." ". $threeFour . "\n" .
 $fourOne ." ". $fourTwo ." ". $fourThree ." ". $fourFour . "\n" .
 $fiveOne ." ". $fiveTwo ." ". $fiveThree ." a ". $fiveFour;

 $message = $intro[0] . $oneOne . " from " . $oneTwo;



     header('Content-Type: image/jpeg');
     $img = imageLimerick($limerick);
     imagepng($img, '../mechlimrix.png');
     imagedestroy($img);

     $image = $site_url.'/mechlimrix.png';

     $connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

     $message = $message;
     $media = $connection->upload('media/upload', ['media' => $image]);
     $parameters = [
         'status' => $message,
         'media_ids' => implode(',', [$media->media_id_string])
     ];

     $result = $connection->post('statuses/update', $parameters);
