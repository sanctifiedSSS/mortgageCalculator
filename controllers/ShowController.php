<?php

class ShowController extends BaseController
{
    /**
     * ActionName
     * @var string
     */
    public $name = 'show';

    /**
     * @var MortgageRepository
     */
    protected $mortgageRepository;

    public function __construct(MortgageRepository $mortgageRepository)
    {
        $this->mortgageRepository = $mortgageRepository;
    }


    /**
     * Shows payment schedule
     * @param Request $request
     * @return Response
     */
    public function showAction(Request $request){

        $title = 'График платежей';

        $programID = trim($request->getQueryParameter('programID'));
        $propertyPrice = trim($request->getQueryParameter('propertyPrice'));
        $creditLines = trim($request->getQueryParameter('creditLines'));
        $initialPayment = trim($request->getQueryParameter('initialPayment'));

        $program = $this->mortgageRepository->getByID($programID);

        $remainder = round($propertyPrice - $initialPayment, 2);
        $bodyPayment = round($remainder / $creditLines, 2);

        $date = new DateTime('now', null);
        $interval = new DateInterval('P1M');

        for ($month = 0; $month < $creditLines; $month++) {

            $daysNumber = cal_days_in_month(CAL_GREGORIAN, $date->format('m'), $date->format('Y'));

            $id = $month + 1;
            $currentDate = $date->format('d.m.Y');
            $interestPayment = round($remainder * $program['interestRate'] / 100 * $daysNumber / 365, 2);
            $payment = round($bodyPayment + $interestPayment, 2);

            $schedule[] = [
                'id' => $id,
                'currentDate' => $currentDate,
                'payment' => $payment,
                'bodyPayment' => $bodyPayment,
                'interestPayment' => $interestPayment,
                'remainder' => $remainder
            ];

            $remainder = round($remainder - $bodyPayment, 2);

            $date->add($interval);
        }

        return new Response(
            $this->render('schedule', [
                'schedule' => $schedule,
                'title' => $title
            ])
        );



    }
























}