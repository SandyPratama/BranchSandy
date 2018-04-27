<?php
use yii\helpers\Html;

$this->title = 'Create Kota';
$this->params['breadcrumbs'][] = ['label' => 'Kota', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_form', ['model'=>$model,]); ?>

