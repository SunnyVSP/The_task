<?php

namespace app\fixtures;

use yii\test\ActiveFixture;

class RoleFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Role';
    public $dataFile = '@app/fixtures/data/role.php';
}