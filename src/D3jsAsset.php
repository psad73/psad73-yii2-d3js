<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace psad73\D3js;

use yii\web\AssetBundle;

/**
 * Description of D3jsAsset
 *
 * @author Paweł Sadowski <psad73@gmail.com>
 */
class D3jsAsset extends AssetBundle
{
    public $sourcePath = '@npm/d3/dist';
    public $js = [
        ['d3.js'],
    ];

    public static function test()
    {
        return true;
    }
}
