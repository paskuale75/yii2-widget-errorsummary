<?php
use yii\helpers\Html;

if($Model -> hasErrors()):
	echo strtr($this -> context -> template, [
		'{text}' => Html::errorSummary($Model, [
			'header' => false
		])
	]);
endif;