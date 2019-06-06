<?php
/**
 * Created by PhpStorm.
 * User: DanDrix
 * Date: 03/25/19
 * Time: 10:14 AM
 */
$this->assign('title', __('Get closer to the games you love'));
//$this->Html->meta('keywords', 'keywords, are, sweet', ['block' => true]);
//$this->Html->meta('description', 'Become a Partner', ['block' => true]);
?>


<!-- Banner -->
<header class="header">
    <div id="carousel_main" class="carousel carousel-header slide carousel-fade fl-scn" data-ride="carousel">

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
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner" style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_1.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Become a Partner"); ?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            <?= __("Whether you are a streamer, artist, cosplayer… you can now partnership with your favorite games and get rewarded! "); ?>
                                        </p>
                                        <?= $this->element('/pages/index/btnBecomeAPartner', [
                                            'wrapper_class' => 'fadeInLeft ad-900ms'
                                        ]); ?>
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
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner" style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_2.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Support your favorite games"); ?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            <?= __("The more you engage and contribute, the greater are your chances to receive special rewards and contribute to the success of the games you love"); ?>
                                        </p>
                                        <?= $this->element('/pages/index/btnBecomeAPartner', [
                                            'wrapper_class' => 'fadeInLeft ad-900ms'
                                        ]); ?>
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
                <div class="h-fullscreen__page bs-c br-n ow-h header-banner" style="background-image: url(<?= $this->request->getAttribute("webroot") ?>public/assets/img/banner_3.jpg);">
                    <div class="w-100 d-flex jc-c overlay">
                        <!-- sm-overlay -->
                        <div class="overlay bg-light_A-20 d-lg-none"></div>
                        <div class="overlay bg-dark_A-50 d-lg-none"></div>
                        <!-- lg-overlay -->
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                        <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
                    </div>
                    <div class="d-flex align-items-center h-100">
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                                    <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">
                                            <?= __("Get closer to the games you love"); ?>
                                        </h2>
                                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">
                                            <?= __("Become a Partner and get access to special opportunities directly from the development team!"); ?>
                                        </p>
                                        <?= $this->element('/pages/index/btnBecomeAPartner', [
                                            'wrapper_class' => 'fadeInLeft ad-900ms'
                                        ]); ?>
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

<?php echo $this->element('pages/index/pickYourSkills'); ?>


<!-- <?php
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

?> -->


<section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light" id="latestQuests">
    <div class="container">
        <header class="header">
            <h2><?= __('Latest Quests') ?></h2>
        </header>
        <div class="position-relative">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel" role="tablist">

                <li class="nav-item text-fnwp pg-none relative">
                    <a class="nav-link active no-scroll" id="mp-0-tab" data-toggle="tab" href="#mp-0-c" role="tab" aria-controls="mp-0-c" aria-selected="true">
                        <?= __('Tests') ?>
                    </a>
                </li>
                <li class="nav-item text-fnwp relative">
                    <a class="nav-link no-scroll" id="mp-1-tab" data-toggle="tab" href="#mp-1-c" role="tab" aria-controls="mp-1-c" aria-selected="false">
                        <?= __('Translations') ?>
                    </a>
                </li>
                <li class="nav-item text-fnwp relative">
                    <a class="nav-link no-scroll" id="mp-2-tab" data-toggle="tab" href="#mp-2-c" role="tab" aria-controls="mp-2-c" aria-selected="false">
                        <?= __('Moderators') ?>
                    </a>
                </li>
            </ul>
            <!-- /.nav tabs -->


            <!-- tab panes -->
            <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">

                <?php
                $i = 0;
                foreach ($latestQuest_dummyDate as $latestQuestCategory => $quests) : ?>
                    <!-- tab item -->
                    <div class="tab-pane fade <?php if ($i === 0) echo "show active" ?>" id="mp-<?= $i ?>-c" role="tabpanel" aria-labelledby="mp-<?= $i ?>-tab">
                        <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                            <!-- item -->
                            <?php
                            $j = 0;
                            foreach ($quests as $quest) : ?>
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
                                                    <a href="#" class="more-info ml-4 h6">
                                                        <?= __('More info'); ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                                <!-- /.item -->
                                <?php $j++;
                            endforeach; ?>
                        </div>
                    </div>
                    <!-- /.tab item -->

                    <?php $i++;
                endforeach; ?>


            </div>
            <!-- /.tab panes -->
        </div>
    </div>
</section>


<!-- content area -->
<section id="callToActions" class="section gs_features">
    <div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-1">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto text-md-right">
                    <h2 class="mb-4 text-dark"><?= __('Sign up reward'); ?></h2>
                    <span class="d-block text-dark mb-6"><?= __('Become a Partner today and get a welcome gift'); ?></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-2">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto">
                    <h3 class="mb-4 text-light"><?= __('Special for you'); ?></h3>
                    <p class="d-block text-light"><?= __('Sign up and receive information ahead of time so you can create awesome videos and more!'); ?></p>
                    <br><br>
                </div>
            </div>
        </div>


    </div>
    <div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-3">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto">
                    <h3 class="mb-4 text-light text-right"><?= __('Grow your channel'); ?></h3>
                    <span class="d-block text-light text-right"><?= __('Access to closed betas, events and keys for your subscribers'); ?></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c position-relative feature feature-4">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto text-left text-dark">
                    <h3 class="mb-4 text-dark"><?= __('Become a Partner today'); ?></h3>
                    <p class="d-block mb-7">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin pharetra elit arcu, vitae malesuada erat dictum
                        at.
                    </p>
                    <?= $this->element('/pages/index/btnBecomeAPartner', [
                        'btn_class' => 'btn-light',
                        'wrapper_class' => 'fadeInLeft ad-900ms'
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content area -->


<?php $FAQ_dummydata = [
    [
        'question' => __('How it works?'),
        'answer' => __('The Partner Program is a way for talented members of our gaming community to support the games they love and get recognized for it. First you fill out a few questions telling us about the skill or skills you master. Once we get an opportunity (Quest) that fits your profile, we contact you. Depending on the skill or skills you apply for, we can give beta test keys, in-game items, special information, etc. It is our mission to support our awesome community by rewarding them for their contributions!
        If you love games as much as we do, join us!')
    ],
    [
        'question' => __('What do I need to become a Partner?'),
        'answer' => __('We accept different types of Partners: Content creators (influencers, artists, etc), moderators, game testers, pro-gamers, translators, casters, companies, and more (cosplayers, modders, anything related to gaming). The aspects we consider are different for each skill but if you are a talented gamer who creates original quality content or just willing to help the games you love, then you are welcome! Register on this website, fill out the form, and wait for us to contact you.')
    ],
    [
        'question' => __('What if I don’t meet the requirements?'),
        'answer' => __('Everyone can register for our Partner Program and fill out the form, however, opportunities (Quests) are not for everyone. For each new Quest we set specific requirements and contact only Partners with suitable profiles. Requirements differ for each Quest, so the greater your skills are, the more likely you will be contacted. If you weren’t assigned to a Quest that you wanted or have any questions in general, you can contact us in partners@neobricks.com.')
    ],
    [
        'question' => __('How long does it take to be accepted as Partner?'),
        'answer' => __('Registration is completed as soon as you confirm your email and fill out the form. Once you have finished the form, you are already eligible for Quests. Keep your profile updated to make sure you receive the Quests that are right for you.')
    ],
    [
        'question' => __('What do I have to do as a Partner?'),
        'answer' => __('Quest’s details are sent to our Partners. Then you can decide if you would like to participate. The more you engage and contribute, the greater your chances are to receive the Quests’ special rewards. So it is important to hone your skills and continue working to reach the top! Everything in the Partner Program is optional and you can decline any Quest you want without any problems. The Partner Program is an opportunity, not a commitment.')
    ],
    [
        'question' => __('What do I get as a Partner?'),
        'answer' => __('Each Quest comes with various rewards. They could be in-game items, DLC, special access, features on official channels, or even a gift! You will have to complete a Quest in order to receive your reward. Pay attention to the Quests’ details for more reward information.')
    ],
    [
        'question' => __('What are Quests?'),
        'answer' => __('Quests are opportunities we have available for our Partners. They could range from testing new items, playing closed beta games, writing reviews, translating press releases, making a video… the list goes on! Not everyone is eligible for each Quest – you must apply for them through this website and then the Quest is assigned to Partners with compatible profiles. For example, we will not assign “Translation Quests’ to Content Creators, only for Translators.')
    ],
    [
        'question' => __('Am I obligated to accept and fill a Quest?'),
        'answer' => __('No. Like side missions in a game, you can choose which Quest to attend and you can also opt out of it at any time. There is no punishment for not attending or concluding a Quest.')
    ],
    [
        'question' => __('Can I choose Quests?'),
        'answer' => __('Quests suitable with your profile are sent directly to you by email. If you didn’t receive the email for a Quest you want to assign, just send a message to partners@neobricks.com with the Quest you want to join. If possible, we will assign it to you 😊 Remember to keep your profile information updated to receive the best Quests from us.')
    ],
    [
        'question' => __('How will I receive my rewards?'),
        'answer' => __('Partner Program communication is done by email. Quests are sent with details about their rewards and how to claim them. Usually, we send rewards via email or directly in-game.')
    ],
    [
        'question' => __('Can I contact developers?'),
        'answer' => __('Once you are a Partner, you have direct contact with us, NeoBricks. We organize and manage communication with the developers so that they can optimize their time with game improvements without losing contact with their amazing community. So, yes!')
    ]
] ?>


<!-- FAQ -->
<section class="section" id="FAQ">
    <div class="content-section pt-5 pb-8">
        <div class="faq_bg faq_bg_left"></div>

        <div class="container">
            <header class="header text-left text-light">
                <h2 class="mb-6"><?= __('FAQ') ?></h2>
            </header>
            <div class="row">
                <div class="col-12" id="FaqAccordion">
                    <?php $i = 0;
                    foreach ($FAQ_dummydata as $FAQ_item) : ?>

                        <div class="card">
                            <div class="card-header p-0" id="FAQ_question<?= $i ?>">
                                <h5 class="mb-0 question">
                                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#FAQ_answer<?= $i ?>" aria-expanded="true" aria-controls="collapseOne" class="px-2 py-4 collapsed">
                                        <?= $FAQ_item['question']; ?>
                                        <span class="float-right closed"><i class="fas fa-chevron-circle-down"></i></span>
                                        <span class="float-right opened"><i class="fas fa-chevron-circle-up"></i></span>
                                    </a>
                                </h5>
                            </div>

                            <div id="FAQ_answer<?= $i ?>" class="collapse" data-parent="#FAQ_question<?= $i ?>">
                                <div class="card-body">
                                    <div class="answer"> <?= $FAQ_item['answer']; ?></div>
                                </div>
                            </div>
                        </div>

                        <?php $i++;
                    endforeach; ?>
                </div>
            </div>
            <div class="row py-7">
                <div class="col-6 mx-auto">
                    <?= $this->element('/pages/index/btnBecomeAPartner', [
                        'wrapper_class' => 'btn-become-partner'
                    ]); ?>
                </div>
            </div>

        </div>
        <div class="faq_bg faq_bg_right"></div>


    </div>
    <!-- / #FAQ -->