<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Status;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
             <?php $form = ActiveForm::begin(); ?>
                
             <?= $form->field($model, 'name') ?>
             <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
                
             <?= $form->field($model, 'status_id')->dropDownList(
                  Status::find()->select(['value'])->indexBy('id')->column(),
                  ['prompt'=>'Статус проекта']
                ); ?>
             <div class="form-group">
                   <?= Html::submitButton('Добавить проект', ['class' => 'btn btn-success']) ?>
             </div>
                
             <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>