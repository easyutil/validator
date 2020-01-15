<?php

namespace Easyutil\Validator\Validation;
use Carbon\Carbon;

/**
 * Validações referente à data que não existem ou não se encaixam nas validações padrão do Laravel
 * Class Date
 * @package App\Validator
 */
class Date
{
    /**
     * Valida se a data informada é menor que a data de hoje
     * @param $field
     * @param $value
     * @return bool
     */
    public function beforeToday($field, $value)
    {
        $today = Carbon::now();
        $date = Carbon::createFromFormat('d/m/Y', $value);
        return $date->lessThan($today);
    }

    /**
     * Valida se a data informada é menor ou igual a data de hoje
     * @param $field
     * @param $value
     * @return bool
     */
    public function beforeEqualsToday($field, $value)
    {
        if(!empty($value)){
            $date = \Easyutil\Utilities\Date::format($value);
            $data = explode("/","$date"); // fatia a string $dat em pedados, usando / como referência
            $d = $data[0];
            $m = $data[1];
            $y = $data[2];
            $res = checkdate($m,$d,$y);
            if($res == 1){
                $today = Carbon::now();
                $date = Carbon::createFromFormat('d/m/Y', $date);
                return $date->lessThanOrEqualTo($today);
            }
        }
    }
}
