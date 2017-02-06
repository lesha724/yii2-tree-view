<?php
/**
 * Created by PhpStorm.
 * User: Neff
 * Date: 06.02.2017
 * Time: 22:10
 */

namespace lesha724\treeview;


use yii\web\AssetBundle;

class TreeViewAsset extends AssetBundle
{
    public $sourcePath = '@vendor/lesha724/yii2-tree-view/assets/treeview';

    public $css =[
        //'jquery.treeview.css'
    ];

    public $js = [
        'jquery.treeview.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}