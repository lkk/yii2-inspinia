<?php
namespace lkk\inspinia;

/**
 * Class JsKnobAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class JsKnobAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/jsKnob/jquery.knob.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}