<?php

namespace Easyutil\Validator\Validation;

class Percentage
{
    public function apply($field, $value, $attribute)
    {
        return \Easyutil\Utilities\Percentage::valid($value);
    }
}
