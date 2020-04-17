<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

<!-- <div class="wrap"> -->
<div class="wrapper">
    
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            //'class' => 'navbar-inverse navbar-fixed-top',
            'class'=> 'navbar navbar-expand-md navbar-light bg-primary'
        ],
        
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline mt-2 mt-md-0'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-success my-2 my-sm-0']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>


<!----------new navbar start--------
/
/
/
----------------------------------->
        <?php
        NavBar::begin([
            'renderInnerContainer' => false,
            'options' => [
                'class' => 'main-header navbar navbar-expand bg-white navbar-light border-bottom',
            ],
        ]);

        $menuItems1[] = ['label' =>'Home', 'ulr' => ['site/login']];
        $menuItems1[] = ['label' =>'Contact', 'ulr' => ['site/contact']];
        
        $menuItems1[] = "<li>"
        . Html::beginForm(['/site/logout'], 'post', ['class' =>'form-inline ml-3'])
        . '<div class="input-group input-group-sm">'
        . Html::textInput('test',
            '', 
            [
                'class'=> "form-control form-control-navbar", 
                'type'=> "search", 
                'placeholder' => "Search",
                'araia-label' => "Search"
                ]
                )
        . '<div class="input-group-append">'
        . Html::submitButton(
            '<i class="fa fa-search"></i>',
            ['class' => 'btn btn-navbar']
        )
        . '</div>'
        . Html::endForm()
        . '</div>'
        . '</li>';

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => $menuItems1,
            ]
        );

        NavBar::end();
        ?>
<!----------new navbar end--------
/
/
/
----------------------------------->

    <div class="container">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "\n\t<li class=\"breadcrumb-item\"><i>{link}</i></li>\n", // template for all links
            'activeItemTemplate' => "\t<li class=\"breadcrumb-item active\">{link}</li>\n", // template for the active link
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
