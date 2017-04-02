<?php
namespace lkk\inspinia;

/**
 * Class JsTreeAsset
 *
 * Demo: tree_view.html
 * @package lkk\inspinia
 */
class JsTreeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/jsTree/style.min.css'
    ];    
    public $js = [
        'js/plugins/jsTree/jstree.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}