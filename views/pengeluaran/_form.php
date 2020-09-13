<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$model->id_keluar = $kode;
/* @var $this yii\web\View */
/* @var $model app\models\Pengeluaran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengeluaran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $form->field($model, 'id_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_keluar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
