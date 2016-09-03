<?php

/* @var $this yii\web\View */
use app\components\FirstWidgets;
use app\components\SecondWidget;
use app\components\ClockWidget;
use app\components\VoteWidget;
use app\components\upload\UplaodWidget;
use app\components\saidbakr\JuiThemeSelectWidget;
use yii\bootstrap\Modal;
use yii\jui\DatePicker;
$this->title = 'My Yii Application';

?>

<?php

//  ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1><br /></br>


          <!-- < app\components\UploadWidget::widget(); ?> -->
            <?= app\components\upload\UploadWidget::widget(); ?>

          <!-- < JuiThemeSelectWidget::widget() ;?> -->
    </div>
</div>
