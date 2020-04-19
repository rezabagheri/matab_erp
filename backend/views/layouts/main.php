<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

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
    <div class="wrapper">

        <?php
        // NavBar::begin([
        //     'brandLabel' => Yii::$app->name,
        //     'brandUrl' => Yii::$app->homeUrl,
        //     'options' => [
        //         //'class' => 'navbar-inverse navbar-fixed-top',
        //         'class' => 'navbar navbar-expand-md navbar-light bg-primary'
        //     ],

        // ]);
        // $menuItems = [
        //     ['label' => 'Home', 'url' => ['/site/index']],
        // ];
        // if (Yii::$app->user->isGuest) {
        //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
        // } else {
        //     $menuItems[] = '<li>'
        //         . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline mt-2 mt-md-0'])
        //         . Html::submitButton(
        //             'Logout (' . Yii::$app->user->identity->username . ')',
        //             ['class' => 'btn btn-success my-2 my-sm-0']
        //         )
        //         . Html::endForm()
        //         . '</li>';
        // }
        // echo Nav::widget([
        //     'options' => ['class' => 'navbar-nav ml-auto'],
        //     'items' => $menuItems,
        // ]);
        // NavBar::end();
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

        $menuItems1[] = ['label' => 'Home', 'ulr' => ['site/login']];
        $menuItems1[] = ['label' => 'Contact', 'ulr' => ['site/contact']];

        $menuItems1[] = ""
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline ml-3'])
            . '<div class="input-group input-group-sm">'
            . Html::textInput(
                'test',
                '',
                [
                    'class' => "form-control form-control-navbar",
                    'type' => "search",
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
            . '';

        echo Nav::widget(
            [
                'options' => ['class' => 'navbar-nav'],
                'items' => $menuItems1,
            ]
        );

        $menuAlertItems[] =  [
            'label' => '<i class="fa fa-comments-o"></i>
        <span class="badge badge-danger navbar-badge">3</span>',
            'url' => '#',
            'options' => ['class' => 'nav-item dropdown'],
            'items' => [
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],

            ],
        ];

        $menuAlertItems[] =  [
            'label' => '<i class="fa fa-bell-o"></i>
        <span class="badge badge-warning navbar-badge">15</span>',
            'url' => '#',
            'options' => ['class' => 'nav-item dropdown'],
            'items' => [
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],

            ],
        ];

        $menuAlertItems[] =  [
            'label' => '<i class="fa fa-bell-o"></i>
        <span class="badge badge-warning navbar-badge">15</span>',
            'url' => '#',
            'options' => ['class' => 'nav-item dropdown'],
            'items' => [
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],
                ['label' => 'menu1', 'url' => '#'],

            ],
        ];


        echo Nav::widget(
            [
                'options' => ['class' => 'navbar-nav ml-auto'],
                'items' => $menuAlertItems,
                'encodeLabels' => false,
            ]
        );
        NavBar::end();
        ?>
        <!----------new navbar end--------
/
/
/
----------------------------------->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="مرکز روانپزشکی دکتر باقری" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= Yii::$app->name ?></span>
            </a>
            <?php
            $navItems[] = [
                'label' => 'Home',
                'url' => ['site/index'],
                'linkOptions' => [],
            ];
            
            $navItems[] = [
                'label' => 'بیماران',
                'url'   => Url::to(["custommers/index"]),
                'linkOptions' => []
            ];
            $navItems[] = [
                'label' => 'پزشکان',
                'url'   => Url::to(["doctors/index"]),
                'linkOptions' => []
            ];

            $navItems[] = [
                'label' => 'ویزیت‌ها',
                'url'   => Url::to(["visits/index"]),
                'linkOptions' => []
            ];

            if (Yii::$app->user->isGuest) {
                $navItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $navItems[] = ['label' => 'Logout', 'url' => ['/site/logout']];
            }
            ?>
            <?=
                Nav::widget([
                    'items' => $navItems,
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column mt-3'],
                    //'activateItems' => true,
                    'activateParents' => true,
                    // 'items' => [
                    //     [
                    //         'label' => 'Home',
                    //         'url' => ['site/index'],
                    //         'linkOptions' => [],
                    //     ],
                    //     [
                    //         'label' => 'Dropdown',
                    //         'items' => [
                    //             ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                    //             '<li class="divider"></li>',
                    //             '<li class="dropdown-header">Dropdown Header</li>',
                    //             ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                    //         ],
                    //     ],
                    //     [
                    //         'label' => 'Login',
                    //         'url' => ['site/login'],
                    //         'visible' => Yii::$app->user->isGuest
                    //     ],
                    // ],
                    // set this to nav-tab to get tab-styled navigation
                ]);
            ?>
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= Html::encode($this->title) ?></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <?= Breadcrumbs::widget([
                                'itemTemplate' => '<li class="breadcrumb-item"><i>{link}</i></li>', // template for all links
                                'activeItemTemplate' => '<li class="breadcrumb-item active">{link}</li>', // template for the active link
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                'options' => ['class' => 'breadcrumb float-sm-left']
                            ]) ?>
                            <!-- <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v3</li>
                            </ol> -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

    </div>
    <footer class="main-footer">
        <!-- To the right -->
        <div class="d-sm-block-down">
            <strong><?= Yii::powered() ?></strong> All rights reserved.
            <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        </div>
        <!-- Default to the left -->

    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>