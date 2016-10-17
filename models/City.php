<?php


namespace app\models;


use yii\db\ActiveRecord;

class City extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%city}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['city_id' => 'id']);
    }
}