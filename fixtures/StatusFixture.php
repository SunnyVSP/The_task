<?php

namespace app\fixtures;

use yii\test\ActiveFixture;

class StatusFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Status';
    public $dataFile = '@app/fixtures/data/status.php';
}