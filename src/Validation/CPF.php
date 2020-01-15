<?php

namespace Easyutil\Validator\Validation;

class CPF
{
    public function apply($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }
        return \Easyutil\Utilities\CPF::valid($value);
    }
}
