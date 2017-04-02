<?php
namespace lkk\inspinia;

/**
 * Class DropZoneAsset
 *
 * Demo: form_file_upload.html
 * @package lkk\inspinia
 */
class DropZoneAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/dropzone/basic.css',
        'css/plugins/dropzone/dropzone.css'
    ];
    public $js = [
        'js/plugins/dropzone/dropzone.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}