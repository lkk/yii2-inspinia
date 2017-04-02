<?php
namespace lkk\inspinia;

/**
 * Class BootstrapTagsInputAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class BootstrapTagsInputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css'
    ];
    public $js = [
        'js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}