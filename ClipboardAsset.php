<?php
namespace lkk\inspinia;

/**
 * Class ClipboardAsset
 *
 * Demo: clipboard.html
 * @package lkk\inspinia
 */
class ClipboardAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/clipboard/clipboard.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}