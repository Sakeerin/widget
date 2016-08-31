<?php

namespace app\components;

use yii\base\Widget;

class ClockWidget extends Widget
{

    public function init()
    {
        //yii\web\JqueryAsset::register($this->getView());
        parent::init();
    }

    public function run()
    {
        return $this->render('clock');
    }

}
