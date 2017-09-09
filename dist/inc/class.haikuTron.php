<?php
/**
 * HaikuTron class file
 *
 * PHP Version 7.1
 *
 * @category HaikuTron
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

/**
 * HaikuTron class
 *
 * @category HaikuTron
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */
class HaikuTron
{
    public $dmQuery   = "ml=awesome";
    public $syllables = 2;

    /**
     * __construct
     *
     * @param mixed $dmQuery
     * @param mixed $syllables
     *
     * @return mixed
     */
    public function __construct($dmQuery, $syllables)
    {
        $this->dmQuery   = $dmQuery;
        $this->syllables = $syllables;
    }

    /**
     * Builds a datamuse query
     *
     * @return string
     */
    public function haWord()
    {
        $curl = curl_init();
        $url = 'https://api.datamuse.com/words?' . $this->dmQuery . "&max=500&md=s";

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($resp, true);
        shuffle($result);

        foreach ($result as $res) {
            if ($res['numSyllables'] == $this->syllables) :
                return $res['word'];
                break;
            endif;
        }
    }
}
