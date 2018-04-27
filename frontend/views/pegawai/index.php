<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama',
            'email:email',
            'alamat:ntext',
            [
                'label' => 'Domisili',
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'domisili',
                'value' => function($data){ 
                    return $data->kota->nama_kota;
                }
            ],
            [   
                'label' => 'Kode Pos',
                'attribute' => 'kode_pos',
                'headerOptions' => ['style' => 'width:5%'],
            ],
            [   
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['style' => 'width:6%'],
            ],
        ],
    ]); ?>

</div>
