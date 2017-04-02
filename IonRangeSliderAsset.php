<?php
namespace lkk\inspinia;

/**
 * Class IonRangeSliderAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class IonRangeSliderAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/ionRangeSlider/ion.rangeSlider.css',
        'css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css'
    ];    
    public $js = [
        'js/plugins/ionRangeSlider/ion.rangeSlider.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}