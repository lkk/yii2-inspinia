<?php
namespace lkk\inspinia;

/**
 * Class JasnyAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class JasnyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/jasny/jasny-bootstrap.min.css'
    ];
    public $js = [
        'js/plugins/jasny/jasny-bootstrap.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}