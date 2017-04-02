<?php
namespace lkk\inspinia;

/**
 * Class SparkLineAsset
 *
 * Demo: graph_sparkline.html
 * @package lkk\inspinia
 */
class SparkLineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/sparkline/jquery.sparkline.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}