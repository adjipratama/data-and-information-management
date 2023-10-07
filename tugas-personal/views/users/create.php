<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Users';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="users-form">

        <?php $form = ActiveForm::begin(); ?>
        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />

        <?= $form->field($model, 'IdRole')->textInput() ?>

        <?= $form->field($model, 'Nip')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Username')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'NoHp')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'JenisKelamin')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Alamat')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'TanggalLahir')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
