<?php
namespace lkk\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lkk\inspinia
 */
class FlotSplineAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot-spline';
    public $js = [
        'js/jquery.flot.spline.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'lkk\inspinia\FlotAsset'
    ];
}