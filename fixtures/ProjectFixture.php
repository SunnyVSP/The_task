<?php

namespace app\fixtures;

use yii\test\ActiveFixture;

class ProjectFixture extends ActiveFixture
{
    public $modelClass = 'app\models\Project';
    public $dataFile = '@app/fixtures/data/project.php';
}