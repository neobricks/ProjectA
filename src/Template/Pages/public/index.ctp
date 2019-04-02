<?php
/**
 * Created by PhpStorm.
 * User: DanDrix
 * Date: 03/25/19
 * Time: 10:14 AM
 */
?>


<!-- Banner -->
<header class="header">
    <div id="carousel_main"
         class="carousel carousel-header slide carousel-fade fl-scn"
         data-ride="carousel">

        <!-- Indicators -->
        <div class="po_carousel__wrapper">
            <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
                <li data-target="#carousel_main" data-slide-to="0" class=""></li>
                <li data-target="#carousel_main" data-slide-to="1" class=""></li>
                <li data-target="#carousel_main" data-slide-to="2" class="active"></li>
            </ol>
        </div>
        <!-- /Indicators -->

        <!-- Carousel items -->
        <div class="carousel-inner a-cont">

            <!-- carousel-item -->
            <div class="carousel-item active">
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner"
                     style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_1.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2"
                             data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms"
                             data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Become a Partner");?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                        <?= __("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra elit arcu, vitae malesuada erat dictum at. Suspendisse commodo ultricies nulla non condimentum. Sed vestibulum mauris a lorem ultrices auctor. Nulla bibendum posuere orci.");?>
                                        </p>
                                        <div class="d-flex fadeInLeft ad-900ms">
                                            <a class="disabled btn btn-lg bg-dark_A-50 o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0"><span
                                                        class="d-block text-light">
                                                       BECOME A PARTNER
                                                </span>
                                            </a>
                                            <a href="#"
                                               class="btn btn-lg btn-primary parallelogram br-round-0tl br-round-0bl un_text mb-0"><span
                                                        class="d-block text-dark"> <i
                                                            class="fas fa-chevron-right"></i> </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.carousel-item -->

            <!-- carousel-item -->
            <div class="carousel-item">
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner"
                     style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_1.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2"
                             data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms"
                             data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Become a Partner");?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            <?= __("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra elit arcu, vitae malesuada erat dictum at. Suspendisse commodo ultricies nulla non condimentum. Sed vestibulum mauris a lorem ultrices auctor. Nulla bibendum posuere orci.");?>
                                        </p>
                                        <div class="d-flex fadeInLeft ad-900ms">
                                            <a class="disabled btn btn-lg bg-dark_A-50 o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0"><span
                                                        class="d-block text-light">
                                                       BECOME A PARTNER
                                                </span>
                                            </a>
                                            <a href="#"
                                               class="btn btn-lg btn-primary parallelogram br-round-0tl br-round-0bl un_text mb-0"><span
                                                        class="d-block text-dark"> <i
                                                            class="fas fa-chevron-right"></i> </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.carousel-item -->

            <!-- carousel-item -->
            <div class="carousel-item">
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner"
                     style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_1.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2"
                             data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms"
                             data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Become a Partner");?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            <?= __("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra elit arcu, vitae malesuada erat dictum at. Suspendisse commodo ultricies nulla non condimentum. Sed vestibulum mauris a lorem ultrices auctor. Nulla bibendum posuere orci.");?>
                                        </p>
                                        <div class="d-flex fadeInLeft ad-900ms">
                                            <a class="disabled btn btn-lg bg-dark_A-50 o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0"><span
                                                        class="d-block text-light">
                                                       BECOME A PARTNER
                                                </span>
                                            </a>
                                            <a href="#"
                                               class="btn btn-lg btn-primary parallelogram br-round-0tl br-round-0bl un_text mb-0"><span
                                                        class="d-block text-dark"> <i
                                                            class="fas fa-chevron-right"></i> </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.carousel-item -->



        </div>


        <!-- Carousel nav -->
        <!--
        <div class="carousel-control-prev a-out-t"><a class="text-light"
                                                      href="#carousel_main"
                                                      data-slide="prev"><span
                        class="icon-cl-prev text-shadow pe-7s-angle-left"></span></a>
        </div>
        <div class="carousel-control-next a-out-t"><a class="text-light"
                                                      href="#carousel_main"
                                                      data-slide="next"><span
                        class="icon-cl-next text-shadow pe-7s-angle-right"></span></a>
        </div>
        -->
    </div>
</header>
<!-- /.banner -->


<section class="py-5 owl-carousel-spotlight carousel-spotlight ig-carousel"
         id="skills">
    <div class="container">
        <header class="header">
            <h2 class="text-dark">
                <?= __('Pick your skill'); ?>
            </h2>
        </header>

        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_1.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Content
                                Creators</h4>
                            <p class="text-center text-dark h6">
                                Youtubers, Streamers, Illustrators, the talent
                                squad!
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_2.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Testers </h4>
                            <p class="text-center text-dark h6">
                                Work hard, play hard, test even harder
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_3.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Moderators</h4>
                            <p class="text-center text-dark h6">
                                Help us keeping communities helpful and friendly
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_4.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Business & Corps</h4>
                            <p class="text-center text-dark h6">
                                Good corps partnering up against evil
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_1.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Content
                                Creators</h4>
                            <p class="text-center text-dark h6">
                                Youtubers, Streamers, Illustrators, the talent
                                squad!
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_2.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Testers </h4>
                            <p class="text-center text-dark h6">
                                Work hard, play hard, test even harder
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_3.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Moderators</h4>
                            <p class="text-center text-dark h6">
                                Help us keeping communities helpful and friendly
                            </p>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="item">
                            <?= $this->Html->image('/public/assets/img/skill_4.png', [
                                'class' => 'img-fluid'
                            ]) ?>
                            <h4 class="text-center text-dark mb-0">Business & Corps</h4>
                            <p class="text-center text-dark h6">
                                Good corps partnering up against evil
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button>
                <button type="button" role="presentation" class="owl-next"><span
                            aria-label="Next">›</span></button>
            </div>
            <div class="owl-dots">
                <button role="button" class="owl-dot active"><span></span>
                </button>
                <button role="button" class="owl-dot"><span></span></button>
                <button role="button" class="owl-dot"><span></span></button>
            </div>
        </div>


    </div>
</section>


<?php
$latestQuest_dummyDate = [
    'tests' => [
        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
        [
            'title' => 'Hundred Soul',
            'img_path' => '/public/assets/img/quest_img_4.png',
        ],
        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
    ],
    'translations' => [
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
        [
            'title' => 'Hundred Soul',
            'img_path' => '/public/assets/img/quest_img_4.png',
        ],
        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
    ],
    'moderators' => [

        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
        [
            'title' => 'Destiny Child for Europe',
            'img_path' => '/public/assets/img/quest_img_3.png',
        ],
        [
            'title' => 'Hundred Soul',
            'img_path' => '/public/assets/img/quest_img_4.png',
        ],
        [
            'title' => 'KurtzPel CBT',
            'img_path' => '/public/assets/img/quest_img_1.png',
        ],
        [
            'title' => 'Black Squad Spring Patch',
            'img_path' => '/public/assets/img/quest_img_2.png',
        ],
    ]
];

?>


<section
        class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light"
        id="latestQuests">
    <div class="container">
        <header class="header">
            <h2>Latest Quests</h2>
        </header>
        <div class="position-relative">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap"
                id="most_popular_products-carousel" role="tablist">
                <li class="nav-item text-fnwp pg-none relative">
                    <a class="nav-link active" id="mp-01-tab" data-toggle="tab"
                       href="#mp-0-c" role="tab" aria-controls="mp-01-c"
                       aria-selected="true">
                        <?= __('Tests') ?>
                    </a>
                </li>
                <li class="nav-item text-fnwp relative">
                    <a class="nav-link" id="mp-02-tab" data-toggle="tab"
                       href="#mp-1-c" role="tab" aria-controls="mp-02-c"
                       aria-selected="false">
                        <?= __('Translations') ?>
                    </a>
                </li>
                <li class="nav-item text-fnwp relative">
                    <a class="nav-link" id="mp-03-tab" data-toggle="tab"
                       href="#mp-2-c" role="tab" aria-controls="mp-03-c"
                       aria-selected="false">
                        <?= __('Moderators') ?>
                    </a>
                </li>
            </ul>
            <!-- /.nav tabs -->


            <!-- tab panes -->
            <div id="color_sel_Carousel-content"
                 class="tab-content fl-scn relative w-100">

                <?php
                $i = 0;
                foreach ($latestQuest_dummyDate as $latestQuestCategory => $quests): ?>
                    <!-- tab item -->
                    <div class="tab-pane fade <?php if ($i === 0) echo "show active" ?>"
                         id="mp-<?= $i ?>-c" role="tabpanel"
                         aria-labelledby="mp-<?= $i ?>-tab">
                        <div class="owl-carousel gs-carousel"
                             data-carousel-margin="30" data-carousel-nav="true"
                             data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                            <!-- item -->
                            <?php
                            $j = 0;
                            foreach ($quests as $quest): ?>
                                <div class="item">
                                    <div class="item-cont">
                                        <figure class="owl_item_review">
                                            <div>
                                                <div class="position-relative overflow-hidden">
                                                    <?= $this->Html->image($quest['img_path'], [
                                                        'class' => 'm-0-auto'
                                                    ]) ?>
                                                    <h4 class="title p-4">
                                                        <?= $quest['title'] ?>
                                                    </h4>
                                                    <button class="assign btn btn-outline-light btn-lg ml-4 rounded-0 px-2 p-1 ">
                                                        <?= __('ASSIGN'); ?>
                                                    </button>
                                                    <a href="#"
                                                       class="more-info ml-4 h6">
                                                        More info
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <!-- /.item -->
                                <?php $j++; endforeach; ?>
                        </div>
                    </div>
                    <!-- /.tab item -->

                    <?php $i++; endforeach; ?>


            </div>
            <!-- /.tab panes -->
        </div>
    </div>
</section>


<!-- content area -->
<section class="section gs_features">
    <div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative"
             style="background-image: url('/public/assets/img/bg_cta_1.png'); background-color: #d4d4d4; background-position: top left;">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto text-md-right">
                    <h2 class="mb-4 text-dark"><?= __('Sign-up reward'); ?></h2>
                    <span class="d-block mb-6" style="color:#9e9e9e;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra elit arcu, vitae malesuada erat dictum at. </span>

                </div>
            </div>
        </div>

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative"
             style="background-image: url('/public/assets/img/bg_cta_2.png');">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto">
                    <h3 class="mb-4 text-light"><?= __('Get giveaways and special content exclusive for Partners'); ?></h3>
                    <p class="d-block text-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin pharetra elit arcu, vitae malesuada erat dictum
                        at. Suspendisse commodo ultricies nulla non condimentum.
                        Sed vestibulum mauris a lorem ultrices auctor. Nulla
                        bibendum posuere orci. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                    </p>
                    <br><br>
                </div>
            </div>
        </div>


    </div>
    <div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative"
             style="background-image: url('/public/assets/img/bg_cta_3.png'); background-position: top left;">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto">
                    <h3 class="mb-4 text-light text-right"><?= __('Access to closed betas, events and keys for your subscribers'); ?></h3>
                    <p class="d-block text-light text-right">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin pharetra elit arcu, vitae malesuada erat dictum
                        at. Suspendisse commodo ultricies nulla non condimentum.
                        Sed vestibulum mauris a lorem ultrices auctor. Nulla
                        bibendum posuere orci. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit.
                    </p>
                    <br><br>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c position-relative"
             style="background-image: url('/public/assets/img/bg_cta_4.png'); background-color: #f8991d; background-position: top right;">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto text-left text-dark">
                    <h3 class="mb-4 text-dark"><?= __('Become a Partner today'); ?></h3>
                    <p class="d-block mb-7">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin pharetra elit arcu, vitae malesuada erat dictum
                        at.
                    </p>

                    <div class="d-flex fadeInLeft ad-900ms">
                        <a class="disabled btn btn-lg bg-dark o-1 text-light br-round-0tr br-round-0br parallelogram un_text mb-0"><span
                                    class="d-block text-light">
                            <?= __('BECOME A PARTNER'); ?>
                        </span>
                        </a>
                        <a href="#"
                           class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0">
                            <span class="d-block text-dark"> <i
                                        class="fas fa-chevron-right"></i> </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content area -->


<?php $FAQ_dummydata = [
    [
        'question' => 'How it works?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'What is looked in for Partners?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'What do I need to become a Partner?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'What if I don’t meet the requirements?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'How long does it take to be accepted as Partner?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'How will I receive rewards, keys, etc?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'What do I have to do as a Partner?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ],
    [
        'question' => 'Can I contact developers?',
        'answer' => '    Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim.
                    '
    ]
] ?>


<!-- FAQ -->
<div class="content-section pt-5" id="FAQ">
    <div class="faq_bg faq_bg_left"></div>

    <div class="container">
        <header class="header text-left text-light">
            <h2 class="mb-6">FAQ</h2>
        </header>
        <div class="row">
            <div class="col-12" id="FaqAccordion">
                <?php $i = 0;
                foreach ($FAQ_dummydata as $FAQ_item): ?>

                    <div class="card">
                        <div class="card-header" id="FAQ_question<?= $i ?>">
                            <h5 class="mb-0 question">
                                <a href="javascript:void(0);"
                                   data-toggle="collapse"
                                   data-target="#FAQ_answer<?= $i ?>"
                                   aria-expanded="true"
                                   aria-controls="collapseOne">
                                    <?= $FAQ_item['question']; ?>
                                </a>
                            </h5>
                        </div>

                        <div id="FAQ_answer<?= $i ?>" class="collapse"
                             data-parent="#FAQ_question<?= $i ?>">
                            <div class="card-body">
                                <div class="answer"> <?= $FAQ_item['answer']; ?></div>
                            </div>
                        </div>
                    </div>

                    <?php $i++; endforeach; ?>
            </div>
        </div>
    </div>
    <div class="faq_bg faq_bg_right"></div>

</div>
<!-- / #FAQ -->
