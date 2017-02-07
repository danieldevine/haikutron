<?php
/**
 * creates a haikutastic word object
 * using the Datamuse API
 * with s
 */
class haikuTron
{
    public $dmQuery   = "ml=awesome&max=50&md";
    public $syllables = 2;

    public function __construct($dmQuery, $syllables)
    {
        $this->dmQuery = $dmQuery;
        $this->syllables = $syllables;
    }

    public function haWord()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.datamuse.com/words?' . $this->dmQuery . "&max=100&md=s");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($resp, true);
        shuffle($result);

        foreach ($result as $res) {
            if ($res['numSyllables'] == $this->syllables):
                return $res['word'] . "&nbsp;";
            break;
            endif;
        }
    }
}
