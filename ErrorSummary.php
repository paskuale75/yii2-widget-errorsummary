<?php
namespace plance\widget\errorsummary;

class ErrorSummary extends \yii\base\Widget
{
	public $Model;
	
    public function run()
    {
		return $this -> render('error-summary',[
			'Model' => $this -> Model,
		]);
    }
}