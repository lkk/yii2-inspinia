<?php
namespace lkk\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lkk\inspinia
 */
class SparklineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-sparkline';
    public $js = [
        'dist/jquery.sparkline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}