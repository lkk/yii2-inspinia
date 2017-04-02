<?php
namespace lkk\inspinia;

/**
 * Class SummerNoteAsset
 *
 * Demo: form_editors.html
 * @package lkk\inspinia
 */
class SummerNoteAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/summernote/summernote.css',
        'css/plugins/summernote/summernote-bs3.css'
    ];
    public $js = [
        'js/plugins/summernote/summernote.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}