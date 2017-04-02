<?php
namespace lkk\inspinia;

/**
 * Class DataMapsAsset
 *
 * Demo: datamaps.html
 * @package lkk\inspinia
 */
class DataMapsAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/lkk/yii2-inspinia/assets';
    public $js = [
        'js/plugins/typehead/bootstrap3-typeahead.min.js',
        'js/plugins/d3/d3.min.js',
        'js/plugins/topojson/topojson.js',
        'js/plugins/datamaps/datamaps.all.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}