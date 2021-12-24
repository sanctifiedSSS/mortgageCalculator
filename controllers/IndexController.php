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
        return new Response(
            $this->render('form', [
                'title' => 'Ипотечный калькулятор'
            ])
        );
    }




}

