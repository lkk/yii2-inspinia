<?php
namespace lkk\inspinia;

/**
 * Class DataPickerAsset
 *
 * Demo: form_advanced.html
 * @package lkk\inspinia
 */
class DataPickerAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/datapicker/datepicker3.css'
    ];
    public $js = [
        'js/plugins/datapicker/bootstrap-datepicker.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}