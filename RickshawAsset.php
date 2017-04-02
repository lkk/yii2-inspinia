<?php
namespace lkk\inspinia;

/**
 * Class RickshawAsset
 *
 * Demo: graph_rickshaw.html
 * @package lkk\inspinia
 */
class RickshawAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/rickshaw/vendor/d3.v3.js',
        'js/plugins/rickshaw/rickshaw.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}