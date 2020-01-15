<?php

namespace Easyutil\Validator\Validation;

class Password
{
    public function apply($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }

        if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/', $value)) {
            return false;
        }

        return true;
    }
}
