<?php
namespace lkk\inspinia;

/**
 * Class ChartAsset
 *
 * Demo: graph_chartjs.html
 * @package lkk\inspinia
 */
class ChartAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/chartJs/Chart.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}