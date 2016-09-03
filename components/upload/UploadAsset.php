<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\components\upload;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class UploadAsset extends AssetBundle
{
    public $sourcePath = '@app/components/upload/assets';
    public $css = [
        'css/site.css',
        'css/main.css',
        //'css/demos.css',
        'css/jquery.Jcrop.css',
        'css/crop.css',
    ];
    public $js = [
      'js/main.js',
      //'js/jquery.min.js',
      'js/jquery.Jcrop.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
