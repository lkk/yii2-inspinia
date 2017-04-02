<?php
namespace lkk\inspinia;

/**
 * Class MorrisAsset
 *
 * Demo: graph_morris.html
 * @package lkk\inspinia
 */
class MorrisAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/morris/morris-0.4.3.min.css'
    ];    
    public $js = [
        'js/plugins/morris/raphael-2.1.0.min.js',
        'js/plugins/morris/morris.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}