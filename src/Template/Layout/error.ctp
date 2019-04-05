<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
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
</head>
<body class="page-body">

    <main class="main-content h-fullscreen d-flex align-items-center text-center text-light">

    <!-- content area -->
    <div class="container">
        <?= $this->Flash->render() ?>

        <?= $this->fetch('content') ?>
        
        <button type="button" onclick="history.back()" class="btn btn-warning btn-round"><i class="fas fa-arrow-left"></i> Go Back</button>
    </div>
    <!-- content area -->

    </main>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Parallax -->
    <script src="assets/plugins/parallax/parallax.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
</body>
   
</html>
