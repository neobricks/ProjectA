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
                                            <?= __("Whether you are a streamer, artist, or cosplayer, you can now partner with your favorite games and get rewarded"); ?>
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
                                            <?= __("The more you engage and contribute, the greater your chances to receive special rewards and contribute to the success of the games you love"); ?>
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
                                            <?= __("Become a Partner and get access to special opportunities directly from the development team"); ?>
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


<!--


Latest Quest

-->






<!-- content area -->
<section id="callToActions" class="section gs_features">

<div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-3">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto">
                    <h3 class="mb-4 text-light text-right"><?= __('Grow your channel'); ?></h3>
                    <span class="d-block text-light text-right"><?= __('Get access to closed betas, special events, and Steam Keys for your subscribers!'); ?></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-sm-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c position-relative feature feature-4">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 mr-auto text-left text-dark">
                    <h3 class="mb-4 text-dark"><?= __('Role model soldier'); ?></h3>
                    <p class="d-block mb-7"><?= __('If you love Black Squad as much as we do, support fun and safe environments, or like to help out new players... We want you!'); ?></p>
                    <?= $this->element('/pages/index/btnBecomeAPartner', [
                        'btn_class' => 'btn-light',
                        'wrapper_class' => 'fadeInLeft ad-900ms'
                    ]); ?>
                </div>
            </div>
        </div>
    </div>




    <div class="row no-gutters">

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-1">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto text-md-right">
                    <h2 class="mb-4 text-dark"><?= __('Sign up reward'); ?></h2>
                    <span class="d-block text-dark mb-6"><?= __('Become a Partner today and receive a Black Squad Welcome Package Steam Key! *Note: Can only be redeemed once.'); ?></span>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c position-relative feature feature-2">
            <div class="row h-100 align-items-center content">
                <div class="col-12 col-md-8 ml-auto">
                    <h3 class="mb-4 text-light"><?= __('Lots of perks'); ?></h3>
                    <p class="d-block text-light"><?= __('You can receive exclusive Partner items, in-game currency, packages, and skins!'); ?></p>
                    <br><br>
                </div>
            </div>
        </div>


    </div>
    
</section>
<!-- /.content area -->


<?php $FAQ_dummydata = [
    [
        'question' => __('What is the Partner Program?'),
        'answer' => __('The Partner Program allows talented members of our gaming community to support the games they love and get recognized for it. To participate, please fill out a few questions telling us about your skills. Depending on your profile and abilities, we will contact you with a personalised opportunity (Quest). Once you complete a Quest, you can receive beta test keys, in-game items, special information, and much more! It is our mission to support our awesome community by rewarding you for your contributions! If you love games as much as we do, join us!')
    ],
    [
        'question' => __('What skills do I need to become a Partner?'),
        'answer' => __('We embrace many different types of Partners: Content Creators (influencers, streamers, artists, etc), Moderators, Game Testers, Professional Gamers, Translators, Casters, Companies, and more (cosplayers, modders, any role related to gaming!). You can even choose multiple skills at once! If you’ve got skills then register on this website, fill out the registration form, and wait for opportunities to pop up.')
    ],
    [
        'question' => __('Are there any requirements to participate?'),
        'answer' => __('Anyone can register to the Partner Program and fill out the form. After the profile has been confirmed and approved, Partners receive personalised opportunities according to your skills. Quests for each game has a specific set of requirements and will only be available to Partners with suitable profiles.')
    ],
    [
        'question' => __('What are Quests?'),
        'answer' => __('Quests are opportunities we provide to our Partners. They can be sent by email or you can apply for them on the main page. Quests range from creating videos, streaming games, testing new game updates and features, playing closed beta games, writing reviews, translating or proofreading articles… the list goes on! For any questions, send a message to partners@neobricks.com. Remember to keep your profile information updated to receive the most suitable Quests. Accepted Quests are shown in your profile.')
    ],
    [
        'question' => __('How long does a Quest last?'),
        'answer' => __('Each Quest has its own completion time specified in its details. They can last one week, one month or be periodic. Some Quests are renewable, and can be accepted more than one time. If you wish to obtain its rewards, you have to complete it within the time frame specified in each Quest’s details.')
    ],
    [
        'question' => __('What do I get as a Partner? How will I receive my rewards?'),
        'answer' => __('Each Quest comes with various rewards. They range from in-game items, DLC, Official Partner titles/items, special access to features on official channels, unique merchandise and even special gifts! You will have to complete a Quest in order to receive your rewards. Check the Quest details for information about rewards and how to claim them. Usually, rewards are sent via email or directly in-game. Special rewards may require additional information.All communication within the Partner Program is done via email and/ or partner channels.')
    ],
    [
        'question' => __('How long does it take to be accepted as a Partner?'),
        'answer' => __('Registration is completed as soon as you confirm your email and fill out the form, your profile will then be checked for validation. If approved, you are eligible for personalised Quests. Keep your profile updated to make sure you receive the Quests that are right for you.')
    ],
    [
        'question' => __('Are there any rules about being a Partner?'),
        'answer' => __('We embrace the BNBR policy (Be Nice, Be Respectful!), especially for our content creators. Please take a minute to read our Policy and Terms of Service for more details about the exclusion criteria of our Program.')
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