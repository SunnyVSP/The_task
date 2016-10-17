<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\City;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'name') ?>
            <?= $form->field($model, 'email') ?>
            <?= $form->field($model, 'city_id')->dropDownList(
                City::find()->select(['name'])->indexBy('id')->column(),
                ['prompt'=>'Выберите город']
            ); ?>

            <div class="form-group">
                <?= Html::submitButton('Редактировать', ['class' => 'btn btn-primary']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>


