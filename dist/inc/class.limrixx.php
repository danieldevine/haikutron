<?php
/**
 * creates a limerickular word object
 * using the Datamuse API
 *
 */
class limrixx
{
    public $dmQuery         = "ml=awesome";
    public $syllables       = 2;
    public $partOfSpeech    = 'n';

    public function __construct($dmQuery, $syllables, $partOfSpeech)
    {
        $this->dmQuery      = $dmQuery;
        $this->syllables    = $syllables;
        $this->partOfSpeech = $partOfSpeech;
    }

    /**
     * build a datamuse query
     * @return string
     */
    public function lxWord()
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.datamuse.com/words?' . $this->dmQuery . "&max=500&md=sp" );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $resp = curl_exec($curl);

        curl_close($curl);

        $result = json_decode($resp, true);

        shuffle($result);

        foreach ($result as $res) {
            if ($res['numSyllables'] == $this->syllables && $res['tags'][0] == $this->partOfSpeech ):
                return $res['word'];
            break;
            endif;
        }
    }
}
