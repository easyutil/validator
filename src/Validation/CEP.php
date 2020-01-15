<?php

namespace Easyutil\Validator\Validation;

/**
 * Class CEP
 * @package App\Validator
 */
class CEP
{
    /**
     * @param $field
     * @param $value
     * @param $attribute
     * @return bool
     */
    public function apply($field, $value, $attribute)
    {
        return \Easyutil\Utilities\CEP::valid($value, true);
    }
}
