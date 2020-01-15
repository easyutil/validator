<?php

namespace Easyutil\Validator\Validation;

class Phone
{
    public function phone($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }
        return \Easyutil\Utilities\Phone::isPhone($value);
    }

    public function cell($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }
        return \Easyutil\Utilities\Phone::isCell($value);
    }

    public function cellWithout9($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }
        return \Easyutil\Utilities\Phone::isCellWithout9($value);
    }

    public function phoneCell($field, $value, $attribute)
    {
        if(empty($value)){
            return true;
        }
        return \Easyutil\Utilities\Phone::isPhone($value) || \Easyutil\Utilities\Phone::isCellWithout9($value);
    }
}
