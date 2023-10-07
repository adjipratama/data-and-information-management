<?php

namespace app\models;
use Yii;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class Role extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'role';
    }
    
    public function getUsers()
    {
        return $this->hasMany(Users::class, ['IdRole' => 'IdRole']);
    }

    public function selectAll()
    {
        $query = $this::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $dataProvider;
    }
}
