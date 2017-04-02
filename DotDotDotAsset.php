<?php
namespace lkk\inspinia;

/**
 * Class DotDotDotAsset
 *
 * Demo: truncate.html
 * @package lkk\inspinia
 */
class DotDotDotAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/daterangepicker/daterangepicker-bs3.css'
    ];
    public $js = [
        'js/plugins/dotdotdot/jquery.dotdotdot.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}