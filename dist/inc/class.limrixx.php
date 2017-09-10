<?php
/**
 * Limrixx class file
 *
 * PHP Version 7.1
 *
 * @category Limrixx
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */

/**
 * HaikuTron class
 *
 * @category Limrixx
 * @package  Haikutronix
 * @author   Dan Devine <jerk@coderjerk.com>
 * @license  WTFPL http://www.wtfpl.net/txt/copying/
 * @link     https://haiku.coderjerk.com
 */
class Limrixx
{
    public $dmQuery      = "ml=awesome";
    public $syllables    = 2;
    public $partOfSpeech = 'n';

    /**
     * __construct
     *
     * @param mixed $dmQuery
     * @param mixed $syllables
     * @param mixed $partOfSpeech
     *
     * @return mixed
     */
    public function __construct($dmQuery, $syllables, $partOfSpeech)
    {
        $this->dmQuery      = $dmQuery;
        $this->syllables    = $syllables;
        $this->partOfSpeech = $partOfSpeech;
    }

    /**
     * Builds a datamuse query
     *
     * @return string
     */
    public function lxWord()
    {
        $curl = curl_init();
        $url  = 'https://api.datamuse.com/words?' .
        $this->dmQuery . "&max=1000&md=sp";

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($resp, true);

        shuffle($result);

        foreach ($result as $res) {
            if ($res['numSyllables'] == $this->syllables
                // && $res['tags'][0] == $this->partOfSpeech
            ) :
                return $res['word'];
                break;
            endif;
        }
    }
}
