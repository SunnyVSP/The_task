<?php
use yii\helpers\{Html, ArrayHelper};
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p>
                <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Вы действительно хотите удалить проект?',
                        'method' => 'post',
                    ],
                ]) ?>
            </p>

            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'description',
                    [
                        'attribute' => 'status_id',
                        'value' => ArrayHelper::getValue($model, 'status.value'),
                    ],
                ],
            ]) ?>

            <p>
                <?= Html::a('Добавить', ['admin/value/create', 'project_id' => $model->id], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                //'dataProvider' => $dataProvider,
                'dataProvider' => new ActiveDataProvider([
                    'query' => $model->getValues()
                ]),

                 'summary' => false,
                  'columns' => [
//                     [
//                    'attribute' => 'project_id',
//                     'value' => 'project.name'
//                     ],
                     [
                       'attribute' => 'user_id',
                       'value' => 'user.name',
                     ],
                     [
                      'attribute' => 'role_id',
                          'value' =>function($model) {
                              switch ($model->role_id) {
                                  case 1:
                                      return "Менеджер";
                                      break;
                                  case 2:
                                      return "Разработчик";
                                      break;
                                  case 3:
                                      return "Дизайнер";
                                      break;
                              }
                          }
                      ],
                      [
                          'class' => 'yii\grid\ActionColumn',
                          'controller' => 'admin/value',
                          'template' => '{update} {delete}',
                          'headerOptions' => ['width' => '50'],
                      ],
                 ],
            ]);
            ?>
            <p>
                <?= Html::a('Назад', '/admin/project/index',['class' => 'btn btn-primary']) ?>
            </p>
        </div>
    </div>
</div>

