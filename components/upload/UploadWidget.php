<?php


  namespace app\components\upload;

  use yii\base\Widget;
  use app\assets\UploadAsset;
  

  /**
   *
   */
  class UploadWidget extends Widget
  {


    public function init()
    {
      parent::init();
      //UploadAsset::register($this->view);

    }

    public function run()
    {
      return $this->render('upload');
    }
  }
