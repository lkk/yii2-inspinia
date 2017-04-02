<?php

namespace lkk\inspinia;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/animate.css',
        'css/style.css'
    ];
    public $js = [
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',
        'js/ajax-modal-popup.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'lkk\inspinia\FontawesomeAsset'
    ];

}
