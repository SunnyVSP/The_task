<?php

namespace app\models;


use yii\db\ActiveRecord;
use Yii;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }

    public function rules()
    {
        return [
            [['city_id'], 'integer'],
            [['name', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => 'Город',
            'name' => 'Имя',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getValues()
    {
        return $this->hasMany(Value::className(), ['user_id' => 'id']);
    }

   
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['id' => 'project_id'])->viaTable('project_user', ['user_id' => 'id']);
    }

    

    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }
}