<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Inventaris */
?>
<div class="inventaris-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_inv',
            'nama_brg',
            'harga',
            'keterangan:ntext',
            'timestamp',
        ],
    ]) ?>

</div>
