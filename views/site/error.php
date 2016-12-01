<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;


?>

<div class="middle-box text-center animated bounceIn">
    <h3 class="font-bold"><?= Html::encode($this->title) ?></h3>
    <div class="error-desc">
        <?= nl2br(Html::encode($message)) ?>
        <br/><a href="/" class="btn btn-primary m-t"><?=\Yii::t('app', '回到首页')?></a>
    </div>
</div>