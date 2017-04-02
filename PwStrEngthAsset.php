<?php
namespace lkk\inspinia;

/**
 * Class PwStrEngthAsset
 *
 * Demo: password_meter.html
 * @package lkk\inspinia
 */
class PwStrEngthAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'css/plugins/textSpinners/spinners.css'
    ];    
    public $js = [
        'js/plugins/pwstrength/pwstrength-bootstrap.min.js',
        'js/plugins/pwstrength/zxcvbn.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}