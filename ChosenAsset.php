<?php
namespace lkk\inspinia;

/**
 * Class ChosenAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class ChosenAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/chosen/bootstrap-chosen.css'
    ];
    public $js = [
        'js/plugins/chosen/chosen.jquery.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}