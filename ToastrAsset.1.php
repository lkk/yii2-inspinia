<?php
namespace lkk\inspinia;

/**
 * Class ToastrAsset
 *
 * Demo: toastr_notifications.html
 * @package lkk\inspinia
 */
class ToastrAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/touchspin/jquery.bootstrap-touchspin.min.css'
    ];
    public $js = [
        'js/plugins/touchspin/jquery.bootstrap-touchspin.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}