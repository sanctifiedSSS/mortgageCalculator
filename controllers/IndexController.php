<?php

class IndexController extends BaseController
{
    /**
     * Action name
     * @var string
     */
    public $name = 'index';


    public function indexAction()
    {
        $title = 'Ипотечный калькулятор';
        return new Response(
            $this->render('form', [
                'title' => $title
            ])
        );
    }




}

