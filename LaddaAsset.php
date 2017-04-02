<?php
namespace lkk\inspinia;

/**
 * Class LaddaAsset
 *
 * Demo: loading_buttons.html
 * @package lkk\inspinia
 */
class LaddaAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/ladda/ladda-themeless.min.css'
    ];    
    public $js = [
        'js/plugins/ladda/spin.min.js',
        'js/plugins/ladda/ladda.min.js',
        'js/plugins/ladda/ladda.jquery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}