<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
 
$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 my-forms">
            <h4 class='text-center'>Регистрация на сайте</h4>
            <?php $form = ActiveForm::begin(['layout' => 'horizontal','id' => 'form-signup','fieldConfig' => ['horizontalCssClasses' => ['wrapper' => 'col-lg-8'],'options' => ['class' => 'form-group'],'labelOptions' => ['class' => 'col-lg-2 col-lg-offset-1 control-label'],'enableError' => true]]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>

                <?= $form->field($model, 'email')->input('email')->label('Email') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                <div class="form-group">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="btn-group btn-group-justified">
                            <div class="btn-group">
                                <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                            <div class="btn-group">
                                <?= Html::resetButton('Сбросить', ['class' => 'btn btn-default']) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php ActiveForm::end(); ?>
 
        </div>
    </div>
</div>
