<div class="card card-information my-3  d-none" id="content_creators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Content Creator'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <button type="button"
                        class="btn btn-sm text-dark btn-primary btn-update">
                    <?= __('Update'); ?>
                </button>
            </span>
        </h4>
        
        <?php echo $this->Form->create(null, [
                        'id' => 'formPartnerContentCreator',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- username -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('How you want to be called') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[username]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- channels -->
            <h6 class="text-primary"> Your main channel(s):</h6>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Youtube') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[youtube]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Twitch') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[twitch]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /channels -->

            <!-- social networls -->
            <h6 class="text-primary"> Your social network:</h6>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Twitter') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[twitter]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Discord') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[discord]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Instagram') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[instagram]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Other') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('content_creators[other]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /social networks -->


            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What type of content do you create?*') ?>
                </label>
                <div class="col-8">
                    <?php
                    $type_of_content_dummyData = [
                        ['value' => 'streams', 'label' => 'Streams'],
                        ['value' => 'gameplay', 'label' => 'Gameplay'],
                        ['value' => 'reviews', 'label' => 'Reviews'],
                        ['value' => 'humor', 'label' => 'Humor'],
                        ['value' => 'unboxing', 'label' => 'Unboxing'],
                        ['value' => 'mods', 'label' => 'Mods'],
                        ['value' => 'fanfics', 'label' => 'Fanfics'],
                        ['value' => 'guides_articles', 'label' => 'Guides/Articles'],
                        ['value' => 'events_coverage', 'label' => 'Events coverage'],
                        ['value' => 'lifestyle', 'label' => 'Lifestyle'],
                        ['value' => 'tutorials', 'label' => 'Tutorials'],
                    ];
                    ?>

                    <?php foreach ($type_of_content_dummyData as $type_of_content): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $type_of_content['value'] ?>">
                                <?= $type_of_content['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox">
                            <div class="form-check">
                                <input type='hidden' name="content_creators[type_of_content_gameplay][][<?= $type_of_content['value'] ?>]" value="0" />
                                <input class="form-check-input"
                                        type="checkbox"
                                        id="<?= 'type_of_content_' . $type_of_content['value'] ?>"/>
                                <label class="form-check-label w-100"
                                        for="<?= 'type_of_content_' . $type_of_content['value'] ?>">
                                        <?= $type_of_content['label'] ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>

            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What is your channel about?') ?>*
                </label>
                <div class="col-8">
                    <?php
                    $channel_about_dummyData = [
                        ['value' => 'games', 'label' => 'Games'],
                        ['value' => 'technology', 'label' => 'Technology'],
                        ['value' => 'nerd_geek', 'label' => 'Nerd/Geek'],
                        ['value' => 'other', 'label' => 'Other']
                    ];
                    ?>

                    <?php foreach ($channel_about_dummyData as $channel_about): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $channel_about['value'] ?>">
                                <?= $channel_about['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox">
                            <div class="form-check">
                                <input type='hidden' name="content_creators[channel_about][][<?= $channel_about['value'] ?>]" value="0" />
                                <input class="form-check-input"
                                        type="checkbox"
                                        id="<?= 'channel_about_' . $channel_about['value'] ?>"/>
                                <label class="form-check-label w-100"
                                        for="<?= 'channel_about_' . $channel_about['value'] ?>">
                                        <?= $channel_about['label'] ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
<?php /*
            <div class="form-group row">
                <label class="col-12 text-primary">
                    <?= __('What game or games you talk about?') ?>*
                </label>
                <div class="col-12">
                    <?php
                    $talk_about_games_dummyData = [
                        ['value' => '', 'label' => 'I talk about all kind of games', 'inputText' => false],
                        ['value' => 'these_games', 'label' => 'I talk about these games:',
                            'inputText' => true, 'placeholder' => 'Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…'],
                        ['value' => 'types_of_games', 'label' => 'I talk about these types of games:',
                            'inputText' => true, 'placeholder' => 'Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure… ']
                    ];
                    ?>

                    <?php foreach ($talk_about_games_dummyData as $talk_about_games): ?>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"
                                   name="talk_about_games"
                                   value="<?= $talk_about_games['value'] ?>"
                                   id="<?= 'talk_about_games' . $talk_about_games['value'] ?>"/>
                            <label class="form-check-label w-100"
                                   for="<?= 'talk_about_games' . $talk_about_games['value'] ?>">
                                <?php if (!$talk_about_games['inputText']): ?>
                                    <?= $talk_about_games['label'] ?>
                                <?php else: ?>
                                    <span class="row">
                                                            <span class="col-12">
                                                                <?= $talk_about_games['label'] ?>
                                                            </span>
                                                            <span class="col-12">
                                                                   <input id="<?= 'talk_about_games' . $talk_about_games['value'] ?>_text"
                                                                          name="<?= 'talk_about_games' . $talk_about_games['value'] ?>_text"
                                                                          type="text"
                                                                          value=""
                                                                          placeholder="<?= $talk_about_games['placeholder'] ?>"
                                                                          class="form-control">
                                                            </span>
                                                        </span>
                                <?php endif; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
*/ ?>
            <!-- submit -->
            <div class="form-group row mt-6 mb-0 submit-wrapper">
                <div class="col-6"></div>
                <div class="col-6">
                    <?php echo $this->Form->submit(__('Submit'), [
                        'class' => 'btn btn-block btn-warning',
                    ]); ?>
                </div>
            </div>
            <!-- /submit --> 
                    
        <?= $this->Form->end(); ?>
    </div> <!-- /card-body -->
</div> <!-- /card -->