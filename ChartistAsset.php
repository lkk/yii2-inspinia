<?php
namespace lkk\inspinia;

/**
 * Class ChartistAsset
 *
 * Demo: graph_chartist.html
 * @package lkk\inspinia
 */
class ChartistAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/chartist/chartist.min.css'
    ];    
    public $js = [
        'js/plugins/chartist/chartist.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}