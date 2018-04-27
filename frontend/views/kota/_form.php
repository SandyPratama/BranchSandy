<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model,'nama_kota')->textInput(['style'=>'width:200px']);
	  // echo $form->field($model,'created_at')->textInput(['maxlength' => false,'placeholder' => 'yyyy/mm/dd','style'=>'width:200px']); 
 	 //  echo $form->field($model,'updated_at')->textInput(['style'=>'width:200px']); ?>

  <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update' , ['class'=> $model->isNewRecord ?  'btn btn-success' : 'btn btn-primary']) ?>
    </div>


 <?php ActiveForm::end(); ?>