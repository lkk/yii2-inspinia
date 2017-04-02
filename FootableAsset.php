<?php
namespace lkk\inspinia;

/**
 * Class FootableAsset
 *
 * Demo: table_foo_table.html
 * @package lkk\inspinia
 */
class FootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/footable/footable.core.css'
    ];
    public $js = [
        'js/plugins/footable/footable.all.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}