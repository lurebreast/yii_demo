<?php
use yii\helpers\Html;
use app\components\HelloWidget;

?>
<?= Html::encode($message) ?>
<?= HelloWidget::widget(['message' => 'Good morning']) ?>
