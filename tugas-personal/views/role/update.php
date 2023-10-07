<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Update Role: ' . $model->IdRole;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdRole, 'url' => ['view', 'IdRole' => $model->IdRole]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="role-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="role-form">
        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'NamaRole')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'Keterangan')->textInput(['maxlength' => true]) ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
