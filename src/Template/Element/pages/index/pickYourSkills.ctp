<?php
$pickYourSkills_dummyDate = [
    [
        'title' => 'Content Creators',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => 'Youtubers, Streamers, Illustrators, the talent squad!'
    ],
    [
        'title' => 'Testers',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => 'Work hard, play hard, test even harder'
    ],
    [
        'title' => 'Moderators',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => 'Help us keeping communities helpful and friendly'
    ],
    [
        'title' => 'Business & Corps',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => 'Good corps partnering up against evil'
    ],
    [
        'title' => '..................',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => '....................'
    ],
    [
        'title' => '..................',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => '....................'
    ],
    [
        'title' => '..................',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => '....................'
    ],
    [
        'title' => '..................',
        'img_path' => '/public/assets/img/skill_1.png',
        'description' => '....................'
    ],
];

?>


<section id="skills"
         class="py-5 owl-carousel-spotlight carousel-spotlight ig-carousel">
    <div class="container">
        <header class="header">
            <h2 class="text-dark">
                <?= __('Pick your skill'); ?>
            </h2>
        </header>
        <div class="position-relative">

            <div class="owl-carousel gs-carousel"
                 data-carousel-margin="30" data-carousel-nav="true"
                 data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">

                <?php
                $j = 0;
                foreach ($pickYourSkills_dummyDate as $skill): ?>
                    <div class="item">
                        <div class="item-cont">
                            <figure class="owl_item_review">
                                <div>
                                    <div class="position-relative overflow-hidden">
                                        <?= $this->Html->image($skill['img_path'], [
                                            'class' => 'img-fluid'
                                        ]) ?>
                                        <h4 class="text-center text-dark mb-0">
                                            <?= $skill['title']; ?>
                                        </h4>
                                        <p class="text-center text-dark h6">
                                            <?= $skill['description']; ?>
                                        </p>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <!-- /.item -->
                    <?php $j++; endforeach; ?>

            </div> <!-- /owl-carousel -->
        </div>

    </div>  <!-- /container -->
</section>
