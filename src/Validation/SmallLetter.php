<?php

namespace Easyutil\Validator\Validation;

class SmallLetter
{
    public function apply($field, $value, $attribute)
    {
        if (!preg_match('/^[a-záàâãéèêíïóôõöúçñ]+$/', $value)) {
            return false;
        }

        return true;
    }
}
