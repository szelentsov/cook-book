<?php

/* @var $this yii\web\View */

$this->title = 'Admin';
use yii\helpers\Html;
?>
<?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?>
