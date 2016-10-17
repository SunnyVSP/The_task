<?php

namespace app\models;

use Symfony\Component\Finder\Expression\ValueInterface;
use Yii;
use yii\db\ActiveRecord;

class Project extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%project}}';
    }

    public function rules()
    {
        return [
            [['status_id'], 'integer'],
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string', ],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_id' => 'Статус',
            'name' => 'Название',
            'description' => 'Описание',
        ];
    }

    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
    }

    public function getValues()
    {
        return $this->hasMany(Value::className(), ['project_id' => 'id']);
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id'])->viaTable('{{%value}}', ['project_id' => 'id']);
    }
}