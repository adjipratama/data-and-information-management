<?php

use app\models\Users;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $data,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdUser',
            'IdRole',
            'Nip',
            'Username',
            'Password',
            'Email:email',
            'Nama',
            'NoHp',
            'JenisKelamin',
            'Alamat:ntext',
            'TanggalLahir',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Users $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdUsers' => $model->IdUser]);
                 }
            ],
        ],
    ]); ?>


</div>
