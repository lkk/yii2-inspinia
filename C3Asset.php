<?php
namespace lkk\inspinia;

/**
 * Class C3Asset
 *
 * Demo: c3.html
 * @package lkk\inspinia
 */
class C3Asset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/c3/c3.min.css'
    ];
    public $js = [
        'js/plugins/d3/d3.min.js',
        'js/plugins/c3/c3.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}