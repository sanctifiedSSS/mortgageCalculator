<?php

class Validator
{
    protected $rules;


    public function __construct(Request $request)
    {
        $mortgage = $request->getRequestParameter('mortgage');
        $this->rules = [

            'age' => [
                'required' => [
                    'message' => 'Введите ваш возраст.'
                ],

                'number' => [
                    'minValue' => 18,
                    'maxValue' => 100,
                    'message' => 'Вам должно быть более 18, но менее 100 лет'
                ]
            ],

            'propertyPrice' => [
                'required' => [
                    'message' => 'Введите стоимость недвижимости'
                ],

                'number' => [
                    'maxValue' => 25000000,
                    'message' => 'Стоимость недвижимости не должна превышать 25 млн рублей'
                ]
            ],

            'initialPayment' => [
                'required' => [
                    'message' => 'Введите желаемый первоначальный взнос'
                ],

                'number' => [
                    'maxValue' => $mortgage['propertyPrice'],
                    'message' => 'Первоначальный взнос не должен превышать стоимость недвижимости'
                ]
            ],

            'creditLines' => [
                'required' => [
                    'message' => 'Введите срок кредитования'
                ],

                'number' => [
                    'minValue' => 36,
                    'maxValue' => 360,
                    'message' => 'Срок кредитования не может быть меньше 36 месяцев, но не должен превышать 360 месяцев'
                ]
            ],

            'propertyType' => [
                'required' => [
                    'message' => 'Выберите тип желаемой недвижимости'
                ]
            ]

        ];

    }

    public function validate($data) {

        $errors = [
        ];


        foreach ($this->rules as $fieldName =>  $rule) {
            $fieldNotEmpty = !empty($data[$fieldName]);

            if (isset($rule['required']) && $fieldNotEmpty === false)  {
                $errors[$fieldName] = isset($rule['required']['message']) ?  $rule['required']['message']  : 'Required.';
            }

            if (isset($rule['number']) && $fieldNotEmpty === true) {

                $number = $data[$fieldName];

                if ($number > $rule['number']['maxValue'] or $number < $rule['number']['minValue']) {
                    $errors[$fieldName] = isset($rule['number']['message']) ?  $rule['number']['message']  : 'Number out of range.';
                }
            }

        }


        return $errors;

    }

}