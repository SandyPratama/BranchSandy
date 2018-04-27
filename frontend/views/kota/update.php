<?php
use yii\helpers\Html;

// $this->title = 'Update Kota ' . $model->nama_kota;
$this->params['breadcrumbs'][] = ['label' => 'Kota', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_kota, 'url' => ['index', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
// echo Html::encode($this->title);
echo $this->render('_form', ['model'=>$model,]);
?>