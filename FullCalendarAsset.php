<?php
namespace lkk\inspinia;

/**
 * Class FullCalendarAsset
 *
 * Demo: calendar.html
 * @package lkk\inspinia
 */
class FullCalendarAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $css = [
        'ss/plugins/fullcalendar/fullcalendar.css',
        'css/plugins/fullcalendar/fullcalendar.print.css'
    ];
    public $js = [
        'js/plugins/fullcalendar/moment.min.js',
        'js/plugins/fullcalendar/fullcalendar.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}