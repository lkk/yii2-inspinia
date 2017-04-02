<?php
namespace lkk\inspinia;

/**
 * Class GritterAsset
 *
 * Demo: index.html
 * @package lkk\inspinia
 */
class GritterAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'js/plugins/gritter/jquery.gritter.css'
    ];
    public $js = [
        'js/plugins/gritter/jquery.gritter.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}