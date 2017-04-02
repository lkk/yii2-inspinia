<?php
namespace lkk\inspinia;

/**
 * Class I18NextAsset
 *
 * Demo: i18support.html
 * @package lkk\inspinia
 */
class I18NextAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/i18next/i18next.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}