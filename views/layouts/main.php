<?php
/* @var $this \yii\web\View */
/* @var $content string */

use lkk\inspinia\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Alert;

AppAsset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/lkk/yii2-inspinia/assets');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body><?php $this->beginBody() ?>

<div id="wrapper" class="">

    <?= $this->render('sidebar', ['directoryAsset' => $directoryAsset]) ?>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <?= $this->render('header', ['directoryAsset' => $directoryAsset]) ?>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <?php if (isset($this->blocks['content-header'])) { ?>
                <?= $this->blocks['content-header'] ?>
            <?php } else { ?>
                <div class="col-sm-<?= isset($this->blocks['content-header-actions']) ? 6 : 12 ?>">
                    <h2><?= $this->title ?></h2>

                    <?=
                    Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'activeItemTemplate' => "<li class=\"active\"><strong>{link}</strong></li>\n"
                    ])
                    ?>
                </div>
                <?php if (isset($this->blocks['content-header-actions'])): ?>
                    <div class="col-sm-6">
                        <div class="title-action">
                            <?= $this->blocks['content-header-actions'] ?>
                        </div>
                    </div>
                <?php endif ?>
            <?php } ?>

        </div>

        <div class="wrapper wrapper-content">

            <div class="row">
                <div class="col-lg-12">
                    <?= $content ?>
                </div>
            </div>
        </div>
        <?= $this->render('footer', ['directoryAsset' => $directoryAsset]) ?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
