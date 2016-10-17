<?php
use yii\helpers\{Html,StringHelper};
use yii\grid\GridView;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p>
                <?= Html::a('Добавить проект', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'name',
                    [
                        'attribute' => 'description',
                        'value' => function($model) {
                            return StringHelper::truncate($model->description, 120);
                        },
                    ],
                    [
                        'attribute' => 'status_id',
                        'value' => 'status.value',
                    ],
        
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'headerOptions' => ['width' => '70'],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>