<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model,'nama_kota'); ?>
<?= $form->field($model,'created_at'); ?>
<?= $form->field($model,'updated_at'); ?>

<?php Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
 		['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
 ?>