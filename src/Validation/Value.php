<?php

namespace Easyutil\Validator\Validation;

/**
 * Validações referente à valores que não existem ou não se encaixam nas validações padrão do Laravel
 * Class Date
 * @package App\Validator
 */
class Value
{
    /**
     * Valida se o valor é maior que outro informados
     * @param $field
     * @param $value
     * @param $params
     * @return bool
     */
    public function bigger($field, $value, $params)
    {
        return $value > $params[0];
    }
}
