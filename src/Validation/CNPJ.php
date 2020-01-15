<?php

namespace Easyutil\Validator\Validation;

class CNPJ
{
    public function apply($field, $value, $attribute)
    {
        if(empty($value)) {
            return true;
        }

        return \Easyutil\Utilities\CNPJ::valid($value);
    }
}
