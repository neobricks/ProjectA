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

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->fetch('meta') ?>

    <title><?= $this->fetch('title') ?></title>


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
    <?php echo $this->Html->css('/plugins/smart_wizard/css/smart_wizard.min.css'); ?>
    <!-- CSS main -->
    <?php echo $this->Html->css('/public/assets/css/dist/main.css'); ?>
    <?php echo $this->Html->css('/public/assets/css/dist/styles.min.css'); ?>

    <?= $this->fetch('css') ?>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?= $this->Url->build('/public/assets/favicon/apple-touch-icon.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= $this->Url->build('/public/assets/favicon/favicon-32x32.png ') ?>">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?= $this->Url->build('/public/assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest"
          href="<?= $this->Url->build('/public/assets/favicon/site.webmanifest') ?>">
    <link rel="mask-icon"
          href="<?= $this->Url->build('/public/assets/favicon/safari-pinned-tab.svg') ?>"
          color="#000000">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="theme-color" content="#ffffff">


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
                    <a class="nav-link pl-lg-0" href="javascript:void(0);"
                       data-toggle="modal" data-target="#becomePartnerModal">
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
                        <a class="nav-link" href="/contact-us">
                            <?= __('Contact NeoBricks'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <?= __('Terms & Conditions'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy-policy">
                            <?= __('Privacy Policy') ?>
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


<!-- sign in/up -->
<div class="modal fade" id="userLogin" tabindex="-1" role="dialog"
     aria-labelledby="userLoginTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header border-secondary">
                <h5 class="modal-title" id="userLoginTitle">Log in</h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <div class="text-center my-6">
                        <a class="btn btn-circle btn-sm btn-google mr-2"
                           href=""><i class="fab fa-google fa-2x"></i></a>
                        <a class="btn btn-circle btn-sm btn-facebook mr-2"
                           href=""><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a class="btn btn-circle btn-sm btn-twitter" href=""><i
                                    class="fab fa-twitter fa-2x"></i></a>
                    </div>
                    <span class="hr-text small my-6">Or</span>
                </div>
                <form class="input-transparent">
                    <div class="form-group">
                        <input type="text" class="form-control border-secondary"
                               name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password"
                               class="form-control border-secondary"
                               name="password" placeholder="Password">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input"
                                   checked="" id="rememberMeCheck">
                            <label class="custom-control-label"
                                   for="rememberMeCheck">Remember me</label>
                        </div>
                        <a class="small-3" href="#">Forgot password?</a>
                    </div>
                    <div class="form-group mt-6">
                        <button class="btn btn-block btn-warning" type="submit">
                            Login
                        </button>
                    </div>
                </form>
                <span class="small">Don't have an account? <a href="#">Create an account</a></span>
            </div>
        </div>
    </div>
</div>
<!-- /sign in/up  -->


<!-- Become a partner flow -->
<div class="modal fade" id="becomePartnerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title" id="userLoginTitle">Become a
                    partner</h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Become a partner flow -->
                <div id="becomePartnerFlow" class="sw-main input-transparent">
                    <ul class="nav nav-tabs step-anchor">
                        <li class="nav-item active">
                            <a href="#becomePartnerFlow-step-1" class="nav-link">
                                ACCOUNT
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#becomePartnerFlow-step-2" class="nav-link">
                                CHOOSE YOUR SKILLS(S)
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#becomePartnerFlow-step-3" class="nav-link">
                                Information
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="#becomePartnerFlow-step-4" class="nav-link">
                                TERMS
                            </a>
                        </li>
                    </ul>
                    <div class="sw-container tab-content">
                        <div id="becomePartnerFlow-step-1" class="tab-pane step-content bg-dark py-5">
                            <div class="form-group row">
                                <label class="col-3 text-primary">
                                    <?= __('Email') ?>
                                </label>
                                <div class="col-9">
                                    <input name="email" type="email"
                                           class="form-control"
                                           value=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 text-primary">
                                    <?= __('Password') ?>
                                </label>
                                <div class="col-9">
                                    <input name="password" type="password"
                                           class="form-control"
                                           value=""/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 text-primary">
                                    <?= __('Confirm Password') ?>
                                </label>
                                <div class="col-9">
                                    <input name="confirm_password" type="password"
                                           class="form-control"
                                           value=""/>
                                </div>
                            </div>
                        </div>

                        <div id="becomePartnerFlow-step-2" class="tab-pane step-content bg-dark py-5">

                            <?php
                                $skills_dummyData = [
                                    [
                                        'code' => 'content_creators',
                                        'title' => 'Content Creators',
                                        'description' => 'You are an Influencer, Artist, Youtuber or streamer. You create awesome content for games you play!',
                                        'img_path' => '/public/assets/img/skill_1'
                                    ],
                                    [
                                        'code' => 'moderators',
                                        'title' => 'Moderators',
                                        'description' => 'Angels from the sky, you bring peace and order to selvage game communities.',
                                        'img_path' => '/public/assets/img/skill_2'
                                    ],

                                ]
                            ?>
                            <h5 class="text-primary">Select your skill(s). You can choose more than one.</h5>
                            <?php foreach($skills_dummyData as $skill): ?>
                            <div class="row py-2">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-3">
                                            <?= $this->Html->image($skill['img_path'], [
                                                'class' => 'w-100 img-fluid',
                                            ]) ?>
                                        </div>
                                        <div class="col-7">
                                            <h3 class="text-primary"><?= $skill['title'];?></h3>
                                            <p><?= $skill['description'];?></p>
                                        </div>
                                        <div class="col-2">
                                            <label class="checkbox-wrapper">
                                                <input class="checkbox" type="checkbox" name="skill" value="<?= $skill['code'];?>" />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- become partner flow: step 3 --->
                        <div id="becomePartnerFlow-step-3" class="tab-pane step-content bg-dark">

                            <!--Content Creators -->
                            <?= $this->element('becomePartnerForm/step3_contentcreators'); ?>

                        </div>
                        <!-- /become partner flow: step 3 --->


                        <div id="becomePartnerFlow-step-4" class="tab-pane step-content bg-dark">
                            Step Content
                        </div>
                    </div>
                </div>
                <!-- /Become a partner flow -->
            </div>
        </div>
    </div>
</div>
<!-- /Become a partner modal  -->


<!-- bottom Scripts -->

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<?php echo $this->Html->script('/public/assets/js/jquery.min.js'); ?>
<?php echo $this->Html->script('/public/assets/js/bootstrap.min.js'); ?>

<!-- plugins -->
<?php echo $this->Html->script('/plugins/owl.carousel/owl.carousel.min.js'); ?>
<?php echo $this->Html->script('/plugins/smart_wizard/js/jquery.smartWizard.min.js'); ?>


<?php echo $this->Html->script('/public/assets/js/scripts.js'); ?>
<?php echo $this->Html->script('/public/assets/js/main.js', [
    'id' => '_mainJS',
    'data-plugins' => 'load'
]); ?>
</body>
</html>
