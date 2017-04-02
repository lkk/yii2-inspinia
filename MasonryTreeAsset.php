<?php
namespace lkk\inspinia;

/**
 * Class MasonryTreeAsset
 *
 * Demo: masonry.html
 * @package lkk\inspinia
 */
class MasonryTreeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/masonary/masonry.pkgd.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}