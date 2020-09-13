<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Data Mahasiswa';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-mahasiswa-index">

    <h1></h1>

    <p>
        <?= Html::a('Import Data', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Report',['report'], ['class' => 'btn btn-primary','target'=>'_blank'])?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nim',
            'nama',
            //'alamat',
            'jurusan',
            'semester',
            //'jenis_kel',
            //'agama',
            'kelas',

            [
                'attribute' => 'nim',
                'label' => 'Opsi',
                'filter' => '',
                'format' => 'raw',
                'value' => function ($model){
                    return '<div class="btn-group">
                        '.Html::a('<i class="fa fa-fw fa-eye"></i>', ['view', 'id' => $model->nim], ['class'=>'btn btn-info btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-file"></i>', ['report', 'id' => $model->nim], ['class'=>'btn btn-success btn-sm','target']).'
                        '.Html::a('<i class="fa fa-fw fa-edit"></i>', ['update', 'id' => $model->nim], ['class'=>'btn btn-warning btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-trash"></i>', ['delete', 'id' => $model->nim], ['class'=>'btn btn-danger btn-sm']).'
                    </div>';

                },
            ],
        ],
    ]); ?>


</div>
