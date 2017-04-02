<?php
namespace lkk\inspinia;

/**
 * Class VideoAsset
 *
 * Demo: video.html
 * @package lkk\inspinia
 */
class VideoAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/video/responsible-video.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}