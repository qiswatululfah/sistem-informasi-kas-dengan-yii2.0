<?php

use app\models\DataMahasiswa;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\KasMahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kas-mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(DataMahasiswa::find()->select(['nim','nama'])->all(), 'nim', 'Displayname'),
        'id' => 'nim',
        'class' => 'form-control inline-block',
        'options' => ['placeholder' => '- Pilih Mahasiswa Berdasarkan NIM -'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);
    ?>

    <?= $form->field($model, 'setor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
