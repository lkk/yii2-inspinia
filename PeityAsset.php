<?php
namespace lkk\inspinia;

/**
 * Class PeityAsset
 *
 * Demo: graph_peity.html
 * @package lkk\inspinia
 */
class PeityAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/peity/jquery.peity.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}