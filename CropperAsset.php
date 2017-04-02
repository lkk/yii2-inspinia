<?php
namespace lkk\inspinia;

/**
 * Class CropperAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class CropperAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/cropper/cropper.min.css'
    ];
    public $js = [
        'js/plugins/cropper/cropper.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}