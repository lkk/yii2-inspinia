<?php
namespace lkk\inspinia;

/**
 * Class CodeMirrorAsset
 *
 * Demo: code_editor.html
 * @package lkk\inspinia
 */
class CodeMirrorAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/codemirror/codemirror.css',
        'css/plugins/codemirror/ambiance.css'
    ];    
    public $js = [
        'js/plugins/codemirror/codemirror.js',
        'js/plugins/codemirror/mode/javascript/javascript.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}