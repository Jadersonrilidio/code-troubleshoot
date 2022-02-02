<?php

$listener = new TranslationYandex();

class TranslationYandex {
    const DETECT_YA_URL = 'https://translate.yandex.net/api/v1.5/tr.json/detect';
    const TRANSLATE_YA_URL = 'https://translate.yandex.net/api/v1.5/tr.json/translate';
    
    private $key = 'trnsl.1.1.20220202T171040Z.c73730c1db5f436c.49416f63010117766dd7c4985599617a2f9c3a44';

    /**
     * 
     */
    public function __construct () {}

    /**
     * 
     */
    private function init() {
        if ( empty($this->key) ) {
            throw new InvalidArgumentException("Field <b> key </b> is required.");
        } 
    }

    /**
     * @param $format text format need to translate;
     * @return string
     */
    private function translate_text($format='text') { 
        $this->init();

        $values = array(
            'key' => $this->key,
            'text' => $_GET['text_from'],
            'lang' => $_GET['lang_from'].'-'.$_GET['lang_to'], 
            'format' => ($format=='text') ? 'plain' : $format, 
        );

        $formData = http_build_query($values);
       
        $curlHandle = curl_init(self::TRANSLATE_YA_URL);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $formData);
       
        $json = curl_exec($curlHandle);
        curl_close($curlHandle);
       
        $data = json_decode($json, true);
       
        return ($data['code']==200) ? $data['text'] : $data;
    }

    /**
     * 
     */
    public function echo_translation() {
        if (isset($_GET['submit'])) {
            return $this->translate_text();
        }
    }
}

?>