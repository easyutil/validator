<?php

namespace Easyutil\Validator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Factory;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * @param Factory $factory
     */
    public function boot(Factory $factory)
    {
        $factory->extend('cep', 'Easyutil\Validator\Validation\CEP@apply');
        $factory->extend('cnh', 'Easyutil\Validator\Validation\CNH@apply');
        $factory->extend('cnpj', 'Easyutil\Validator\Validation\CNPJ@apply');
        $factory->extend('cpf', 'Easyutil\Validator\Validation\CPF@apply');
        $factory->extend('credit_card', 'Easyutil\Validator\Validation\CreditCard@apply');
        $factory->extend('date_before_today', 'Easyutil\Validator\Validation\Date@beforeToday');
        $factory->extend('date_before_equals_today', 'Easyutil\Validator\Validation\Date@beforeEqualsToday');
        $factory->extend('money', 'Easyutil\Validator\Validation\Money@apply');
        $factory->extend('password', 'Easyutil\Validator\Validation\Password@apply');
        $factory->extend('percentage', 'Easyutil\Validator\Validation\Percentage@apply');
        $factory->extend('phone', 'Easyutil\Validator\Validation\Phone@phone');
        $factory->extend('cell', 'Easyutil\Validator\Validation\Phone@cellWithout9');
        $factory->extend('phone_cell', 'Easyutil\Validator\Validation\Phone@phoneCell');
        $factory->extend('small_letter', 'Easyutil\Validator\Validation\SmallLetter@apply');
        $factory->extend('bigger', 'Easyutil\Validator\Validation\Value@bigger');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
