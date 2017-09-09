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