<div class="row">
    <div class="col-12">
        <div class="card card-information my-3"
             id="partner_skill_wrapper">
            <div class="card-body">
                <h4 class="card-title">
                    <span class="text-light">
                        <?= __('Your skills'); ?>
                    </span>
                </h4>

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
                    [
                        'code' => 'testers',
                        'title' => 'Testers',
                        'description' => 'Work hard, play hard, test even harder! You are the one who helps games becoming better!',
                        'img_path' => '/public/assets/img/skill_2'
                    ],
                    [
                        'code' => 'pro_gamers',
                        'title' => 'Pro-Gamers',
                        'description' => 'You are the God of First Kill, the Chuck Norris of games, the Daenerys of… you get it. ',
                        'img_path' => '/public/assets/img/skill_2'
                    ],
                    [
                        'code' => 'translators',
                        'title' => 'Translators',
                        'description' => 'You check and translate awesomenesse around the globe – did I wrote it right?',
                        'img_path' => '/public/assets/img/skill_2'
                    ],
                    [
                        'code' => 'casters',
                        'title' => 'Casters',
                        'description' => 'Your lovely voice brings matches alive! You are the Galvão Bueno of games!',
                        'img_path' => '/public/assets/img/skill_2'
                    ],
                    [
                        'code' => 'companies',
                        'title' => 'Companies',
                        'description' => 'Good corps partnering up against evil - Let’s join our forces!',
                        'img_path' => '/public/assets/img/skill_2'
                    ],
                    [
                        'code' => 'others',
                        'title' => 'Others',
                        'description' => 'You have another special skill, so special that you have to explain it to us..',
                        'img_path' => '/public/assets/img/skill_2'
                    ]
                ];
                ?>
                <h5 class="text-primary">Select your skill(s). You
                    can choose more than one.</h5>
                <div class="row py-2">
                <?php foreach ($skills_dummyData as $skill): ?>
                    <div class="col-6 col-md-4 col-lg-3 px-2 py-0 mb-2">
                        <div class="skill card h-100">
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <?= $this->Html->image($skill['img_path'], [
                                            'class' => 'w-100 img-fluid',
                                        ]) ?>
                                    </div>
                                    <div class="col-10 mx-auto">
                                        <h4 class="text-primary lh-1 text-center py-1"><?= $skill['title']; ?></h4>
                                        <p class="mx-4 text-dark"><?= $skill['description']; ?></p>
                                    </div>
                                    <label class="checkbox-wrapper">
                                        <input class="checkbox"
                                               type="checkbox"
                                               name="skill"
                                               value="<?= $skill['code']; ?>"
                                               autocomplete="off"/>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>

            </div> <!-- /card-body -->
        </div> <!-- /card -->

    </div> <!-- /col-12 -->
</div> <!-- /row -->