<?php

namespace Easyutil\Validator\Validation;

class CNH
{
    public function apply($field, $value, $attribute)
    {
        if(empty($value)) {
            return true;
        }

        $ret = false;
        if ((strlen($input = preg_replace('/[^\d]/', '', $value)) == 11) && (str_repeat($input[1], 11) != $input)) {
            $dsc = 0;
            for ($i = 0, $j = 9, $v = 0; $i < 9; ++$i, --$j) {
                $v += (int)$input[$i] * $j;
            }
            if (($vl1 = $v % 11) >= 10) {
                $vl1 = 0;
                $dsc = 2;
            }
            for ($i = 0, $j = 1, $v = 0; $i < 9; ++$i, ++$j) {
                $v += (int)$input[$i] * $j;
            }
            $vl2 = ($x = ($v % 11)) >= 10 ? 0 : $x - $dsc;
            $ret = sprintf('%d%d', $vl1, $vl2) == substr($input, -2);
        }

        return $ret;
    }
}
