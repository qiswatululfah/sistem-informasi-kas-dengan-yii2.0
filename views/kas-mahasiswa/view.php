<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\KasMahasiswa */

$this->title = $model->id_kas;
$this->params['breadcrumbs'][] = ['label' => 'Kas Mahasiswa', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kas-mahasiswa-view">

    <h1></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_kas], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_kas], [
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
            'id_kas',
            'nim',
            'nim0.nama',
            'nim0.alamat',
            'nim0.semester',
            'setor',
            'tglsetor',
        ],
    ]) ?>

</div>
