<?php
/**
 * This page is the non human friendly version of
 * Haikutronix for crontabbing and tweeting
 *
 * PHP Version 7.1
 *
 * @category Haiku
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

/**
 * Creates a random colour
 *
 * @return mixed
 */
function randColor()
{
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
}


/**
 * Use imageLimerick to turn a
 * limerick into an image.
 *
 * @param string $limerick The limerick
 *
 * @return image
 */
function imageLimerick($limerick)
{
    $im = imagecreatetruecolor(506, 232);
    $randomOne = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imagefill($im, 0, 0, $randomOne);
    $randomTwo = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    $font  = $_SERVER["DOCUMENT_ROOT"] .'/assets/fonts/LibreBaskerville-Italic.ttf';

    // image, font size, rotation, left, top
    imagettftext($im, 16, 0, 20, 90, $randomTwo, $font, $limerick);
    return $im;
}
