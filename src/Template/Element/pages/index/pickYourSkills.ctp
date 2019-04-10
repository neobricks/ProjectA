<?php
$pickYourSkills_dummyDate = [
    [
        'title' => __('Content Creators'),
        'img_path' => '/public/assets/img/part-contentcreator.png',
        'description' => __('Wether you are an Artist or Influencer, you create awesome content for games you play!')
    ],
    [
        'title' => __('Testers'),
        'img_path' => '/public/assets/img/part-tester.png',
        'description' => __('Work hard, play hard, test even harder! You are the one who helps games becoming better!')
    ],
    [
        'title' => __('Moderators'),
        'img_path' => '/public/assets/img/part-mod.png',
        'description' => __('Angels from the sky, you bring peace and order to selvage game communities.')
    ],
    [
        'title' => __('Business & Corps'),
        'img_path' => '/public/assets/img/part-corp.png',
        'description' => __('Good corps partnering up against evil - Let’s join our forces!')
    ],
    [
        'title' => __('Pro-Gamers'),
        'img_path' => '/public/assets/img/part-pro.png',
        'description' => __('You are the God of First Kill, the Chuck Norris of games, the Daenerys of… you get it.')
    ],
    [
        'title' => __('Casters'),
        'img_path' => '/public/assets/img/part-caster.png',
        'description' => __('Your lovely voice brings matches alive!')
    ],
    [
        'title' => __('Translators'),
        'img_path' => '/public/assets/img/part-translator.png',
        'description' => __('You check and translate awesomenesse around the globe – did I wrote it right?')
    ],
    [
        'title' => __('Others'),
        'img_path' => '/public/assets/img/part-others.png',
        'description' => __('You have another special skill, so special that you have to explain it to us.')
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
