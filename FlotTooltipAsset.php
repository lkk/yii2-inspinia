<?php
namespace lkk\inspinia;

/**
 * Class FontawesomeAsset
 *
 * @package lkk\inspinia
 */
class FlotTooltipAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/flot.tooltip';
    public $js = [
        'js/jquery.flot.tooltip.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'lkk\inspinia\FlotAsset'
    ];
}