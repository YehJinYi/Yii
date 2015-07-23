<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php
	if(Yii::$app->session->hasFlash('success'))
	{
		echo "<div class='alert alert-success'>".Yii::$app->session->getFlash('success')."</div>";
	}
?>


<table width="100%">
	<tr width="100%">
		<td width="20%" align="right" >
			<?='<h2>Name :　'.'</h2>';?>
		</td>
		<td width="80%" align="left">
  			<input type="text" class="form-control" id="userform-name" value="<?=$model['name'];?>">
		</td>
	</tr>
</table>
<?='<h2>Name : ';?>
<?=$model['name'].'</h2>';?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name');?>
<?= $form->field($model,'email');?>
<?= Html::submitButton('Submit',['class'=>'btn btn-success']);?>
<?php $form = ActiveForm::end(); ?>

