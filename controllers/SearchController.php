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
        $programs = $this->mortgageRepository->getAll($propertyPrice, $minInitialPayment, $propertyType);



        if ($programs === []){
            $title = 'Ипотечыный калькулятор';
            $noProgramsError = 'Подходящих под ваши условия программ не найдено, попробуйте смягчить условия';
            return new Response(
                $this->render('form', [
                    'noProgramsError' => $noProgramsError,
                    'title' => $title
                ])
            );
        }

        if ($request->isPost() && !empty($request->getRequestParameter('mortgage'))) {

            $validator = new Validator($request);

            $errors = $validator->validate($mortgage);

            if (empty($errors)) {
                $title = 'Подходящие программы';
                return new Response(
                    $this->render('programsList', [
                        'programs' => $programs,
                        'title' => $title
                    ])
                );

            } else {
                $title = 'Ипотечный калькулятор';
                return new Response (
                    $this->render('form', [
                        'errors' => $errors,
                        'title' => $title
                    ])
                );

            }

        }

    }

}