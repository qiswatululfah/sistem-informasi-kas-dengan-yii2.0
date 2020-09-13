<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\KasMahasiswaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kas Mahasiswa';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kas-mahasiswa-index">

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

            'id_kas',
            'nim',
            'setor',
            'tglsetor',

            [
                'attribute' => 'id_kas',
                'label' => 'Opsi',
                'filter' => '',
                'format' => 'raw',
                'value' => function ($model){
                    return '<div class="btn-group">
                        '.Html::a('<i class="fa fa-fw fa-eye"></i>', ['view', 'id' => $model->id_kas], ['class'=>'btn btn-info btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-file"></i>', ['report', 'id' => $model->id_kas], ['class'=>'btn btn-success btn-sm','target']).'
                        '.Html::a('<i class="fa fa-fw fa-edit"></i>', ['update', 'id' => $model->id_kas], ['class'=>'btn btn-warning btn-sm']).'
                        '.Html::a('<i class="fa fa-fw fa-trash"></i>', ['delete', 'id' => $model->id_kas], ['class'=>'btn btn-danger btn-sm']).'
                    </div>';
                },
            ],
        ],
    ]); ?>


</div>
