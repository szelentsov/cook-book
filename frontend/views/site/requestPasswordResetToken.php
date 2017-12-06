<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4 my-forms">
            <?php $form = ActiveForm::begin(['id' => 'password-reset-request-form']); ?>

                <?= $form->field($model, 'email')->input('email')->label('Ваш email') ?>

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
            <?php
                foreach (Yii::$app->session->getAllFlashes() as $key => $message) {
                    echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
                }
            ?>
        </div>
    </div>
</div>
