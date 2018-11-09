<?php

namespace sleifer\autocompleteAjax;

use \yii\web\AssetBundle;

/**
 * @author Ismael Sleifer <ismaelsleifer@gmail.com>
 */
class ActiveAssets extends AssetBundle
{
	public $sourcePath = '@sleifer/autocompleteAjax/assets';

	public $js = [
	];

	public $depends = [
		'yii\web\JqueryAsset',
        'yii\jui\JuiAsset'
	];

	public $css = [
		'css/yii2-autocomplete-ajax.css',
	];
}
