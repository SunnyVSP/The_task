<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\{Role, User};
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(); ?>
            
            <?= $form->field($model, 'user_id')->dropDownList(
                User::find()->select(['name'])->indexBy('id')->column(),
                ['prompt'=>'Выберите пользователя']
            ); ?>
            
            <?= $form->field($model, 'role_id')->dropDownList(
                Role::find()->select(['name'])->indexBy('id')->column(),
                ['prompt'=>'Выберите роль']
            ); ?>
            
                <div class="form-group">
                    <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
                </div>
            
            <?php ActiveForm::end(); ?>
            

        </div>
    </div>
</div>
