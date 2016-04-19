<?php
use yii\helpers\Html;
?>

<?php if($Model -> hasErrors()): ?>
<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<?php
		echo Html::errorSummary($Model, [
			'header' => false
		]);
	?>
</div>
<?php endif; ?>