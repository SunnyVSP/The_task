<?php


namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class Status extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%status}}';
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

    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['status_id' => 'id']);
    }
}