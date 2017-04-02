<?php
namespace lkk\inspinia;

/**
 * Class BlueimpAsset
 *
 * Demo: basic_gallery.html
 * @package lkk\inspinia
 */
class BlueimpAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/blueimp/css/blueimp-gallery.min.css'
    ];
    public $js = [
        'js/plugins/blueimp/jquery.blueimp-gallery.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}