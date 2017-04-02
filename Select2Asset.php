<?php
namespace lkk\inspinia;

/**
 * Class Select2Asset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class Select2Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/select2/select2.min.css'
    ];
    public $js = [
        'js/plugins/select2/select2.full.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}