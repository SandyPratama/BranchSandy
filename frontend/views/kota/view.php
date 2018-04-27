<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'View';
$this->params['breadcrumbs'][] = ['label' => 'Kota', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo Html::encode($this->title);

echo DetailView::widget([
	'model' => $model,
	'attributes' => [
		'id',
		'nama_kota',
		'created_at',
		'updated_at',
	],
]);

echo Html::a('Back', ['index'], ['class' => 'btn btn-success']);

?>