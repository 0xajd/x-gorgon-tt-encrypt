<?php
/**
 * 
 * Several class methods & codes are trimmed for preview purposes
 * They are available on source code
 *
 */
class Encrypt
{
    const KEY1 = "<MISSING_FOR_PREVIEW>";
    const KEY2 = "<MISSING_FOR_PREVIEW>";
    const KEY3 = "<MISSING_FOR_PREVIEW>";

    public function encrypt($jsonbody)
    {
        $key1   = $this->bytearray(self::KEY1);
        $key2 = $this->bytearray(self::KEY2);
        $key3 = $this->bytearray(self::KEY3);
        $arr = $output = [];
        // code removed for preview
        $arr = array_merge($arr, $output);
        return $this->bytearray_decode($arr);
    }

    private function bytearray($string)
    {
        return unpack('C*', $string);
    }

    private function bytearray_decode($byteArray)
    {
        $chars = array_map("chr", $byteArray);
        return join($chars);
    }
}
