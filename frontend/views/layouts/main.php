<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;
use common\widgets\LoginWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Author" content="S.Zelentsov">
    <meta name="Copyright" content="Copyright (c) S.Zelentsov">
    
    <meta property="og:url" content="">
    <meta property="og:site_name" content="CookBook">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="article">
    <meta property="og:image" content="">
        
    
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">

    <?= Html::csrfMetaTags() ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
<?php $this->beginBody() ?>
    <header>
    <?php NavBar::begin([
        'brandLabel' => Html::tag('div', '', [ 'class' => 'site-logo' ]),
        'options' => [ 'class' => 'navbar-default navbar-fixed-top','role'=>'navigation'],
        'innerContainerOptions' => ['class' => 'container-fluid']
    ]);
    echo Nav::widget([
        'items' => [
            ['label' => 'кулинарные рецепты', 'url' => ['/site/chto-prigotovit']],
            ['label' => 'кулинарный гид', 'url' => ['/site/kulinarnii-gid']],
            Yii::$app->user->isGuest ? (
                    [
                        'label' => 'Вход', 
                        'items' => [
                            'template'=> LoginWidget::widget()
                        ],
                    ]
            ) : (
                '<li>'
                    .Html::a('Кабинет', ['cabinet'])
                .'</li>'.
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            ),
            ['label' => 'подписаться', 'url' => ['/site/signup'],'options'=>['id' => 'registration'],'visible'=>Yii::$app->user->isGuest],
        ],
        'options' => ['class' => 'navbar-nav navbar-right'],
    ]);
    
    ActiveForm::begin([
        'options' => [ 'class' => 'navbar-form navbar-left','role' => 'search'],
    ]);
        echo Html::tag('span', '', ['class'=>'glyphicon glyphicon-search']);
        echo Html::input('search', 'search-resept', '', [ 'class' => 'form-control my-input-search','placeholder' => 'Что бы Вы хотели приготовить?','size'=>'33']);
    ActiveForm::end();
    
    NavBar::end();?>
    </header>
    <?= $content ?>
    <footer>
      <small>Copyright © <time datetime="<?= date('Y') ?>"><?= date('Y') ?></time> Coginio - Кулинарные рецепты</small>
    </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
