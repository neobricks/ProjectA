
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
    <?php echo $this->Html->css('/plugins/tagsinput/tagsinput.css'); ?>

    <!-- CSS main -->
    <?php echo $this->Html->css('/public/assets/css/dist/main.css'); ?>
    <?php echo $this->Html->css('/public/assets/css/dist/styles.min.css'); ?>
    <?php echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css'); ?>
    
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

    
<style>
    
    
    .material .group 			  { 
        position:relative; 
        margin-bottom:20px; 
    }
    .material input 				{
        font-size:16px;
        padding:5px 10px;
        padding-top:18px;
        display:block;
        width:100%;
        border:1px solid #757575;
        background: transparent;
        color:#fff;

        font-size: 0.9375rem;
        font-weight: 300;
        border-color: #3a4048;
        border-radius: 0.25rem;
        line-height: 1.9;
    }
    input:focus 		{ outline:none; }

    /* LABEL ======================================= */
    .material label.mat				 {
        color:#fff; 
        font-size:14px;
        font-weight:normal;
        position:absolute;
        pointer-events:none;
        left: 10px;
        top: 10px;
        transition:0.2s ease all; 
        -moz-transition:0.2s ease all; 
        -webkit-transition:0.2s ease all;
    }

    /* active state */
    .material input:focus ~ label.mat, 
    .material input:valid ~ label.mat {
        top:0px;
        font-size:14px;
        color:#f8991d;
    }

    /* BOTTOM BARS ================================= */
    .material .bar 	{ position:relative; display:block; width:300px; }
    .material .bar:before, 
    .material .bar:after 	{
    content:'';
    height:2px; 
    width:0;
    bottom:1px; 
    position:absolute;
    background:#f8991d; 
    transition:0.2s ease all; 
    -moz-transition:0.2s ease all; 
    -webkit-transition:0.2s ease all;
    }
    .material .bar:before {
    left:50%;
    }
    .material .bar:after {
    right:50%; 
    }

    /* active state */
    .material input:focus ~ .bar:before, input:focus ~ .bar:after {
    width:50%;
    }

    /* HIGHLIGHTER ================================== */
    .material .highlight {
    position:absolute;
    height:60%; 
    width:100px; 
    top:25%; 
    left:0;
    pointer-events:none;
    opacity:0.5;
    }

    /* active state */
    .material input:focus ~ .highlight {
    -webkit-animation:inputHighlighter 0.3s ease;
    -moz-animation:inputHighlighter 0.3s ease;
    animation:inputHighlighter 0.3s ease;
    }

    /* ANIMATIONS ================ */
    @-webkit-keyframes inputHighlighter {
        from { background:#5264AE; }
    to 	{ width:0; background:transparent; }
    }
    @-moz-keyframes inputHighlighter {
        from { background:#5264AE; }
    to 	{ width:0; background:transparent; }
    }
    @keyframes inputHighlighter {
        from { background:#5264AE; }
    to 	{ width:0; background:transparent; }
    }
    </style>

</head>

<?php
    $body_class = '';
    if(!empty($user)) $body_class = 'logged-in';
?>

<body class="page-body <?= $body_class; ?>">

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

                <?php if (!empty($user)): ?>
                    <span class="user-name px-3">
                        <?php if (!empty($user['partner'])) {
                            echo $user['partner']['name'];
                        } else {
                            echo $user['email'];
                        } ?>
                    </span>
                    <a class="btn btn-sm text-light d-none d-sm-inline-block"
                       href="<?= $this->Url->Build(['controller'=> 'auth', 'action'=>'logout']); ?>">
                        <?= __('Sign out'); ?>
                    </a>
                <?php else: ?>
                    <a class="btn btn-sm btn-light text-secondary rounded-0"
                       href="javascript:void(0)"
                       data-toggle="modal" data-target="#modalSignIn">
                        <?= __('Sign in'); ?>
                    </a>
                    <a class="btn btn-sm text-light d-none d-sm-inline-block"
                       href="javascript:void(0)"
                       data-toggle="modal" data-target="#modalSignUp">
                        <?= __('Sign up'); ?>
                    </a>
                <?php endif; ?>


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
                    <a class="nav-link pl-lg-0 GoBecomePartner" href="javascript:void(0);"
                       data-toggle="modal" data-target="#becomePartnerModal">
                        <?= __('Become a partner') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link pl-lg-0"
                       href="/#latestQuests">
                        <?= __('Latest quests') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  pl-lg-0"
                       href="/#callToActions">
                        <?= __('Advantages') ?>
                    </a>
                </li>
                <li class="nav-item pr-5">
                    <a class="nav-link  pl-lg-0"
                       href="/#FAQ">
                        <?= __('FAQ') ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- /.navbar -->


<div id="float-button" class="d-none">
    <?= $this->element('/pages/index/btnBecomeAPartner'); ?>
</div>


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
                <p class="lh-1">
                    <small><?= __('We are NeoBricks, an experienced game publishing partner based in Germany.') ?></small>
                </p>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">
                            <?= __('Contact NeoBricks'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/terms-and-conditions">
                            <?= __('Terms & Conditions'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy-policy">
                            <?= __('Privacy Policy') ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/NeoBricksGames/">
                            <?= __('NeoBricks on Facebook'); ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-12 col-lg-9 ">
                <div class="row bg-footer py-5">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <?= $this->Html->image('/public/assets/img/blacksquad.png', [
                                    'class' => 'game-logo img-fluid py-2'
                                ]); ?>
                            </div>
                            <div class="col-12 col-lg-3 ml-auto ">
                                <h6 class="text-uppercase fw-600 mb-4"><?= __('Community') ?></h6>
                                <div class="nav flex-column">
                                    <a class="nav-link"
                                       href="https://store.steampowered.com/app/550650/Black_Squad/"><?= __('Game page') ?></a>
                                    <a class="nav-link"
                                       href="https://steamcommunity.com/app/550650/discussions/"><?= __('Steam Discussion') ?></a>
                                    <a class="nav-link"
                                       href="https://discordapp.com/invite/blacksquad"><?= __('Discord') ?></a>
                                    <a class="nav-link"
                                       href="https://www.facebook.com/playblacksquad/"><?= __('Facebook') ?></a>
                                    <a class="nav-link"
                                       href="http://support.blacksquad.com/"><?= __('Help Center') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>
<!-- /.footer -->


<!-- Modals -->

<!-- sign in -->
<?= $this->element('/modals/public/signin'); ?>

<!-- sign up -->
<?= $this->element('/modals/public/signup'); ?>

<!-- forget password -->
<?= $this->element('/modals/public/forget_password'); ?>


<!-- /Modals -->


<!-- bottom Scripts -->

<!-- jQuery -->
<?php echo $this->Html->script('/public/assets/js/jquery.min.js'); ?>
<?php echo $this->Html->script('/public/assets/js/bootstrap.min.js'); ?>

<!-- plugins -->
<?php echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'); ?>
<?php echo $this->Html->script('/plugins/owl.carousel/owl.carousel.min.js'); ?>
<?php echo $this->Html->script('/plugins/smart_wizard/js/jquery.smartWizard.min.js'); ?>
<?php echo $this->Html->script('/plugins/tagsinput/tagsinput.js'); ?>
<?php echo $this->Html->script('/plugins/jquery-validation-1.19.0/jquery.validate.js'); ?>

<?php echo $this->Html->script('/public/assets/js/scripts.js'); ?>
<?php echo $this->Html->script('/public/assets/js/main.js', [
    'id' => '_mainJS',
    'data-plugins' => 'load'
]); ?>
<?php echo $this->Html->scriptBlock( 'toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}', ['block' => true]);
?>
<?= $this->Flash->render() ?>
<?= $this->fetch('script'); ?>
</body>
</html>
