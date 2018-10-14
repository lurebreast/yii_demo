<?php

namespace app\components;

use yii\base\Widget;

class HelloWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();
        if ($this->message === null) {
            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return $this->render('hello', ['message' => $this->message]);
    }
}