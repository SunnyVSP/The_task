<?php
use yii\grid\GridView;
use yii\helpers\Html;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p>
                <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
            'dataProvider' => $dataProvider,
                //'summary' => false,
                'columns' => [
                    //'id',
                    'name',
                    'email:email',
                    [
                        'attribute' => 'city_id',
                        'value' => 'city.name',
                    ],
                    
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{update} {delete}',
                        'headerOptions' => ['width' => '50'],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>