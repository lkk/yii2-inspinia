<?php
namespace lkk\inspinia;

/**
 * Class BootstrapTourAsset
 *
 * Demo: tour.html
 * @package lkk\inspinia
 */
class BootstrapTourAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/bootstrapTour/bootstrap-tour.min.css'
    ];
    public $js = [
        'js/plugins/bootstrapTour/bootstrap-tour.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}