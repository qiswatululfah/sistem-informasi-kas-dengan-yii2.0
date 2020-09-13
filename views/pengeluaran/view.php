<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */

$this->title = $model->id_keluar;
$this->params['breadcrumbs'][] = ['label' => 'Pengeluaran', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pengeluaran-view">

    <h1></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_keluar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_keluar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_keluar',
            'nim',
            'jumlah',
            'keterangan:ntext',
            //'timestamp',
        ],
    ]) ?>

</div>
