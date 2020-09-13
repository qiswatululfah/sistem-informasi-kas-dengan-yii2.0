<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PengeluaranSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengeluaran';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengeluaran-index">

<h1></h1>

    <p>
        <?= Html::a('Import Data', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Report',['report'], ['class' => 'btn btn-primary','target'=>'_blank'])?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_keluar',
            'nim',
            'jumlah',
            'keterangan:ntext',
            //'timestamp',

            [
                'attribute' => 'id_keluar',
                'label' => 'Opsi',
                'filter' => '',
                'format' => 'raw',
                'value' => function ($model){
                    return '<div class="btn-group">
                        '.Html::a('<i class="fa fa-fw fa-eye"></i>', ['view', 'id' => $model->id_keluar], ['class'=>'btn btn-info btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-file"></i>', ['report', 'id' => $model->id_keluar], ['class'=>'btn btn-success btn-sm','target']).'
                        '.Html::a('<i class="fa fa-fw fa-edit"></i>', ['update', 'id' => $model->id_keluar], ['class'=>'btn btn-warning btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-trash"></i>', ['delete', 'id' => $model->id_keluar], ['class'=>'btn btn-danger btn-sm']).'
                    </div>';
                },
            ],
        ],
    ]); ?>


</div>
