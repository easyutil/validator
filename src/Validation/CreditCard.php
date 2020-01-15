<?php

namespace Easyutil\Validator\Validation;

class CreditCard
{
    public function apply($field, $value, $attribute)
    {
        return \Easyutil\Utilities\CreditCard::valid($value);
    }
}
