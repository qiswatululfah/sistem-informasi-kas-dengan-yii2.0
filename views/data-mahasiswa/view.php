<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DataMahasiswa */

$this->title = $model->nim; 
//$this->title = $model->nama; 
$this->params['breadcrumbs'][] = ['label' => 'Data Mahasiswa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="data-mahasiswa-view">

    <h1></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nim], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nim], [
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
            'nim',
            'nama',
            'alamat',
            'jurusan',
            'semester',
            'jenis_kel',
            'agama',
            'kelas',
        ],
    ]) ?>

</div>
