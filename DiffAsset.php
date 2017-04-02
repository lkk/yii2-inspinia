<?php
namespace lkk\inspinia;

/**
 * Class DiffAsset
 *
 * Demo: diff.html
 * @package lkk\inspinia
 */
class DiffAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/diff_match_patch/javascript/diff_match_patch.js',
        'js/plugins/preetyTextDiff/jquery.pretty-text-diff.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}