<?php
namespace yii\DragDropInteractions\assets;
/**
 * Class DragDropInteractionBottomArea
 *
 * @author Derick Fynn <dcfynn@vodamail.co.za>
 * @since 2.0
 * @package yii\DragDropInteractions\assets
 */
class DragDropInteractionBottomArea extends AssetBundle
{
    // The files are not web directory accessible, therefore we need
    // to specify the sourcePath property. Notice the @vendor alias used.
    public $sourcePath = '@vendor/yiisoft/yii2-drag-drop-interactions/src';
    public $css = [
        'css/demo.css',
        'css/bottom-area.css',
    ];
    public $js = [
        'js/modernizr.custom.js',
    ];

    public $depends = [
        'yii\DragDropInteractions\assets\DragDropInteraction',
    ];
} 