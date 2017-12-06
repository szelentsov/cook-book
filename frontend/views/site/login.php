<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-5 my-forms pull-right">
            <h4 class='text-center'>Вход зарегистрированного пользователя</h4>
            <?php $form = ActiveForm::begin(['layout' => 'horizontal','id' => 'login-form','fieldConfig' => ['horizontalCssClasses' => ['wrapper' => 'col-lg-8'],'options' => ['class' => 'form-group'],'labelOptions' => ['class' => 'col-lg-2 col-lg-offset-1 control-label'],'enableError' => true]]); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Логин') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('Пароль') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Запомнить меня') ?>

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
            <p class='text-center'>
               Если вы забыли свой пароль, вы можете <?= Html::a('сбросить его', ['request-password-reset']) ?>.
           </p>
        </div>
    </div>
</div>
