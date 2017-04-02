<?php
namespace lkk\inspinia;

/**
 * Class BootstrapMarkdownAsset
 *
 * Demo: form_markdown.html
 * @package lkk\inspinia
 */
class BootstrapMarkdownAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/bootstrap-markdown/bootstrap-markdown.min.css'
    ];
    public $js = [
        'js/plugins/bootstrap-markdown/bootstrap-markdown.js',
        'js/plugins/bootstrap-markdown/markdown.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}