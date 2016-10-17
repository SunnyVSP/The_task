<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Value extends ActiveRecord
{
 
    public static function tableName()
    {
        return '{{%value}}';
    }

    
    public function rules()
    {
        return [
            [['project_id', 'user_id', 'role_id'], 'required'],
            [['project_id', 'user_id', 'role_id'], 'integer'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

  
    public function attributeLabels()
    {
        return [
            'project_id' => 'Проект',
            'user_id' => 'Пользователь',
            'role_id' => 'Роль',
        ];
    }
    public function getRole()
    {
        return $this->hasOne(Role::className(), ['id' => 'role_id']);
    }
    

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

  
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }
}