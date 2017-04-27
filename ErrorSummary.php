<?php
namespace plance\widget;

class ErrorSummary extends \yii\base\Widget
{
	public $Model;
	public $template =	'<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{text}
						</div>';
	
    public function run()
    {
		return $this -> render('error-summary',[
			'Model' => $this -> Model,
		]);
    }
}