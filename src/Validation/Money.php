<?php

namespace Easyutil\Validator\Validation;

class Money
{
    public function apply($field, $value, $attribute)
    {
        return \Easyutil\Utilities\Money::valid($value);
    }
}
