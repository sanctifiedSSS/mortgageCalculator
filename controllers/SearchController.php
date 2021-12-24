<?php

class SearchController extends BaseController
{
    /**
     * Action name
     * @var string
     */
    public $name = 'search';


    /**
     * @var MortgageRepository
     */
    protected $mortgageRepository;

    public function __construct(MortgageRepository $mortgageRepository)
    {
        $this->mortgageRepository = $mortgageRepository;
    }

    /**
     * Searching programs by user parameters
     * @param Request $request
     * @return Response|void
     */
    public function searchAction(Request $request)
    {
        $mortgage = $request->getRequestParameter('mortgage');

        $initialPayment = $mortgage['initialPayment'];
        $propertyPrice = $mortgage['propertyPrice'];
        $propertyType = $mortgage['propertyType'];
        $minInitialPayment = $initialPayment / $propertyPrice * 100.0;


        if ($request->isPost() && !empty($mortgage)) {

            $validator = new Validator($request);

            $errors = $validator->validate($mortgage);

            if (empty($errors)) {

                $programs = $this->mortgageRepository->getByUserParameters($propertyPrice, $minInitialPayment, $propertyType);

                if (!empty($programs)) {

                    foreach ($programs as $program) {
                        $monthlyPayment[$program['id']] = round(
                            $mortgage['propertyPrice'] *
                            (($program['interestRate'] / 12 / 100 *
                            ((1 + $program['interestRate'] / 12 / 100) ** $mortgage['creditLines']))
                            / ((1 + $program['interestRate'] / 12 / 100) ** $mortgage['creditLines'] - 1)),
                            2);
                    }

                    return new Response(
                        $this->render('programsList', [
                            'values' => $mortgage,
                            'programs' => $programs,
                            'title' => 'Подходящие программы',
                            'monthlyPayment' => $monthlyPayment
                        ])
                    );

                } else {
                    return new Response(
                        $this->render('form', [
                            'title' => 'Ипотечный калькулятор',
                            'values' => $mortgage,
                            'noProgramsError' => 'Подходящих под ваши условия программ не найдено, попробуйте смягчить условия'
                        ])
                    );

                }

            } else {

                return new Response (
                    $this->render('form', [
                        'errors' => $errors,
                        'values' => $mortgage,
                        'title' => 'Ипотечный калькулятор'
                    ])
                );

            }

        }


    }

}