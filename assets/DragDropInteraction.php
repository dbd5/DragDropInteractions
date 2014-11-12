<?php
namespace yii\DragDropInteractions\assets;
/**
 * Class DragDropInteraction
 *
 * @author Derick Fynn <dcfynn@vodamail.co.za>
 * @since 2.0
 * @package yii\DragDropInteractions\assets
 */
class DragDropInteraction extends AssetBundle
{
    // The files are not web directory accessible, therefore we need
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $sourcePath = '@vendor/yiisoft/yii2-drag-drop-interactions/src';
    public $css = [
        'css/normalize.css',
        'fonts/font-awesome-4.2.0/css/font-awesome.min.css',
    ];
    public $js = [
        'js/draggabilly.pkgd.min.js',
        'js/dragdrop.js'
    ];
} 