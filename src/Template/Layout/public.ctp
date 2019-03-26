<?php
/**
 * Layout for public website
 */

use Cake\Core\Configure;
use Cake\I18n\I18n;
use Cake\Routing\Router;

$locale_options = Configure::read('locale.options');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>

    <?= $this->Html->meta('icon') ?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->fetch('meta') ?>

    <title>
        <?= $this->fetch('title') ?>
    </title>


    <!-- Icons -->
    <?php echo $this->Html->css('/fonts/etline-font.min.css'); ?>
    <?php echo $this->Html->css('/fonts/pe-icon-7-stroke.css'); ?>
    <?php echo $this->Html->css('/fonts/themify-icons.css'); ?>
    <?php echo $this->Html->css('/plugins/fontawesome/css/all.min.css'); ?>

    <!-- Fonts -->
    <?php echo $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i'); ?>
    <?php echo $this->Html->css('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'); ?>

    <!-- CSS Plugins -->
    <?php echo $this->Html->css('/plugins/owl.carousel/owl.carousel.min.css'); ?>

    <!-- CSS main -->
    <?php echo $this->Html->css('/public/assets/css/dist/main.css'); ?>
    <?php echo $this->Html->css('/public/assets/css/dist/styles.min.css'); ?>

    <?= $this->fetch('css') ?>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
    <!-- Fonts -->

    <!--[if lt IE 9]>
    <?php echo $this->Html->script('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'); ?>
    <?php echo $this->Html->script('https://oss.maxcdn.com/respond/1.4.2/respond.min.js'); ?>
    <![endif]-->
</head>

<body class="page-body">

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-3 col-md-2 mr-auto">
                <a class="navbar-brand logo"
                   href="<?= $this->Url->Build('/'); ?>">
                    <?php echo $this->Html->image('/public/assets/img/logo.png', [
                        'class' => 'logo-light mx-auto',
                        'alt' => 'Neobricks'
                    ]); ?>
                </a>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-6 ml-auto text-right">
                <a class="btn btn-sm btn-light text-secondary rounded-0"
                   href="javascript:void(0)"
                   data-toggle="modal" data-target="#userLogin">
                    <?= __('Sign in'); ?>
                </a>
                <a class="btn btn-sm text-light d-none d-sm-inline-block"
                   href="#">
                    <?= __('Sign up'); ?>
                </a>
                <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row m-0 p-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle small p-0" href="#"
                           id="dropdownLocales" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <?php echo $this->Html->image('/public/assets/img/flags/' . $locale_options[I18n::getLocale()]['flag'], [
                                'class' => 'fluid-image w-15'
                            ]); ?>
                            <?php echo $locale_options[I18n::getLocale()]['label'] ?>
                        </a>
                        <div class="dropdown-menu position-absolute">
                            <?php foreach ($locale_options as $locale_key => $locale_value): ?>
                                <a href="<?php echo $this->Url->build(
                                    '/l/' . $locale_key
                                ); ?> " class="dropdown-item">
                                    <?php echo $this->Html->image('/public/assets/img/flags/' . $locale_options[$locale_key]['flag'], [
                                        'class' => 'fluid-image w-25'
                                    ]); ?>
                                    <?php echo $locale_options[$locale_key]['label'] ?>
                                </a>

                            <?php endforeach; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-fixed" type="button"
                data-toggle="collapse" data-target="#collapsingNavbar"
                aria-controls="collapsingNavbar" aria-expanded="false"
                aria-label="Toggle navigation">☰
        </button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item pr-5">
                    <a class="nav-link pl-lg-0" href="javascript:void(0);">
                        <?= __('Become a partner') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link pl-lg-0" href="javascript:void(0);">
                        <?= __('Latest quests') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  pl-lg-0" href="javascript:void(0);">
                        <?= __('Advantages') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  pl-lg-0" href="javascript:void(0);">
                        <?= __('FAQ') ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->


<!-- main content -->
<main class="main-content">
    <?= $this->fetch('content') ?>
</main>

<!-- footer -->
<footer class="footer footer-dark bg-dark pt-5 pb-9">
    <div class="container">
        <div class="row gutters-y">
            <div class="col-6 col-lg-3">
                <a class="navbar-brand logo"
                   href="<?= $this->Url->Build('/'); ?>">
                    <?php echo $this->Html->image('/public/assets/img/logo.png', [
                        'class' => 'logo-light mx-auto',
                        'alt' => 'Neobricks'
                    ]); ?>
                </a>
                <p>
                    <?= __('We are NeoBricks, an experienced game publishing partner based in Germany.') ?>
                </p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?= __('Contact NeoBricks'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?= __('Terms & Conditions'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?= __('NeoBricks on Facebook'); ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-lg-9 ">
                <div class="row bg-footer py-5">
                    <div class="col-12 col-lg-3 ml-auto ">
                        <h6 class="text-uppercase fw-600 mb-4"><?= __('Community') ?></h6>
                        <div class="nav flex-column">
                            <a class="nav-link"
                               href="#"><?= __('Game page') ?></a>
                            <a class="nav-link"
                               href="#"><?= __('Steam Discussion') ?></a>
                            <a class="nav-link"
                               href="#"><?= __('Discord') ?></a>
                            <a class="nav-link"
                               href="#"><?= __('Facebook') ?></a>
                            <a class="nav-link"
                               href="#"><?= __('Help Center') ?></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
<!-- /.footer -->


<!-- bottom Scripts -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<?php echo $this->Html->script('/public/assets/js/jquery.min.js'); ?>
<?php echo $this->Html->script('/public/assets/js/bootstrap.min.js'); ?>
<?php echo $this->Html->script('/plugins/owl.carousel/owl.carousel.min.js'); ?>
<?php echo $this->Html->script('/public/assets/js/scripts.js'); ?>
<?php echo $this->Html->script('/public/assets/js/main.js', [
    'id' => '_mainJS',
    'data-plugins' => 'load'
]); ?>
</body>
</html>
