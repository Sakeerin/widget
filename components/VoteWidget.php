<?php
// your_app/votewidget/VoteWidget.php

namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class VoteWidget extends Widget
{
    public $model;

    public function init()
    {
        parent::init();
    }

    public function run()
    {
         // Register AssetBundle
        //VoteWidgetAsset::register($this->getView());
        return $this->render('_vote', ['product' => $this->model]);
    }
    public function getViewPath()
    {
        return '@app/components/views/';
    }
}
?>
