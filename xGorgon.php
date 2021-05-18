<?php
/**
 * 
 * Several class methods & codes are trimmed for preview purposes
 * They are available on source code
 *
 */
class Gorgon
{
    const HEX_STR = [
        /** Contents removed for preview */
    ];

    const LEN = 128; // just a random number it can be anything


    public function calculate($param, $cookie, $body)
    {
        $hash          = $this->getGorgonHash($param, $body, $cookie);
        $xgorgon = "";
        // contents removed for preview

        return [
            "X-Gorgon"  => $xgorgon,
            "X-Khronos" => $hash->time,
        ];
    }

    private function epoch()
    {
        return time();
    }


    private function getGorgonHash($url, $data = null, $cookie = null, $encoding = "utf-8")
    {
        $gorgon  = [];
        $time    = $this->epoch();
        // contents removed for preview

        return (object) ["gorgon" => $gorgon, "time" => $time];
    }



    private function initGorgonHash($gorgonHash, $hexEncryption)
    {
        // contents removed for preview

        return $gorgonHash;
    }

    private function xGorgon_cookie($cookie)
    {
        $gorgon = [];
        // contents removed for preview
        return $gorgon;
    }

    private function xGorgon_data($data, $encoding)
    {
        $gorgon   = [];
        // contents removed for preview
        return $gorgon;
    }
    // some private methods removed for preview
}
