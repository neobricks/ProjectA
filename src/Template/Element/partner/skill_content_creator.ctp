<div class="card card-information my-3  d-none" id="content_creators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Content Creator'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <span class="text-primary fs-3 fw-400 text-required-field">
                    * Required field
                </span>
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
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('How you want to be called') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[username]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['content_creator']['username']) ? $userInfo['content_creator']['username'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- channels -->
            <h6 class="text-primary"> Your main channel(s): *</h6>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Youtube') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[youtube]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['youtube']) ? $userInfo['content_creator']['youtube'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Twitch') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[twitch]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['twitch']) ? $userInfo['content_creator']['twitch'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Twitter') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[twitter]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['twitter']) ? $userInfo['content_creator']['twitter'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Discord') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[discord]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['discord']) ? $userInfo['content_creator']['discord'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Instagram') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[instagram]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['instagram']) ? $userInfo['content_creator']['instagram'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Other') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('content_creator[other]', [
                            'class' => 'form-control content_creator_channel',
                            'value' => !empty($userInfo['content_creator']['other']) ? $userInfo['content_creator']['other'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /social networks -->


            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What type of content do you create?') ?> *
                </label>
                <div class="col-12 col-sm-8">
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
                        ['value' => 'other', 'label' => 'Other']
                    ];
                    ?>

                    <?php foreach ($type_of_content_dummyData as $type_of_content): ?>

                        <?php
                            $checked = 0;
                            if(!empty($userInfo['content_creator']['type_of_content_gameplay'])) {
                                foreach($userInfo['content_creator']['type_of_content_gameplay'] as $c) {
                                    if(!empty($c[$type_of_content['value']])) {
                                        $checked = $c[$type_of_content['value']];
                                    }
                                }
                            }
                        ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $type_of_content['value'] ?>">
                                <?= $type_of_content['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox">
                            <div class="form-check custom-control custom-checkbox ">
                                <input type='hidden' name="content_creator[type_of_content_gameplay][][<?= $type_of_content['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input"
                                        type="checkbox"
                                        name="content_creator[type_of_content_gameplay][]"
                                        <?= $checked ? "checked" : ""  ?>
                                        id="<?= 'type_of_content_' . $type_of_content['value'] ?>"
                                        data-value="<?= $type_of_content['value'] ?>" />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'type_of_content_' . $type_of_content['value'] ?>">
                                        <?= $type_of_content['label'] ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What is your channel about?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $channel_about_dummyData = [
                        ['value' => 'games', 'label' => 'Games'],
                        ['value' => 'technology', 'label' => 'Technology'],
                        ['value' => 'nerd_geek', 'label' => 'Nerd/Geek'],
                        ['value' => 'other', 'label' => 'Other']
                    ];
                    ?>

                    <?php foreach ($channel_about_dummyData as $channel_about): ?>

                        <?php
                            $checked = 0;
                            if(!empty($userInfo['content_creator']['channel_about'])) {
                                foreach($userInfo['content_creator']['channel_about'] as $c) {
                                    if(!empty($c[$channel_about['value']])) {
                                        $checked = $c[$channel_about['value']];
                                    }
                                }
                            }
                        ?>

                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $channel_about['value'] ?>">
                                <?= $channel_about['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox">
                            <div class="form-check custom-control custom-checkbox">
                                <input type='hidden' name="content_creator[channel_about][][<?= $channel_about['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input "
                                        type="checkbox"
                                        name="content_creator[channel_about][]"
                                        <?= $checked ? "checked" : ""  ?>
                                        id="<?= 'channel_about_' . $channel_about['value'] ?>"
                                        data-value="<?= $channel_about['value'] ?>" />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'channel_about_' . $channel_about['value'] ?>">
                                        <?= $channel_about['label'] ?>
                                </label>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


            <!-- games you like -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game or games you talk about') ?>
                    *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="row  pb-2">
                            <span class="col-12 text-warning">
                                <?= __('I like to play these games:'); ?>
                            </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input flex-column">
                                <input name="content_creator[like_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value="<?=!empty($userInfo['content_creator']['talk_games']) ? $userInfo['content_creator']['talk_games'] : '';?>"
                                        placeholder="Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…"
                                        class="form-control">
                            </div>
                        </span>
                    </div>
                    <div class="row pb-2">
                            <span class="col-12 text-warning">
                                <?= __('I like to play these types of games:'); ?>
                            </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input flex-column">
                                <input name="content_creator[like_type_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value="<?=!empty($userInfo['content_creator']['talk_type_games']) ? $userInfo['content_creator']['talk_type_games'] : '';?>"
                                        placeholder="Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure…"
                                        class="form-control">
                            </div>
                            </span>
                    </div>
                </div>
            </div>
            <!-- /games you like -->


            <!-- platforms -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game platform(s) do create content for?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $platforms_dummyData = [
                        ['value' => 'all_platforms', 'label' => 'All game platforms', 'inputText' => false],
                        ['value' => 'desktop', 'label' => 'PC/Mac games', 'inputText' => false],
                        ['value' => 'mobile', 'label' => 'Mobile games', 'inputText' => false],
                        ['value' => 'console', 'label' => 'Console games', 'inputText' => false],
                        ['value' => 'others', 'label' => 'Others',
                            'inputText' => true, 'placeholder' => '']
                    ];
                    ?>
                    <?php foreach ($platforms_dummyData as $platform): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $platform['value'] ?>">
                                <?= $platform['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox ">
                            <?php
                                $checked = 0;
                                $platform_text = "";
                                if(!empty($userInfo['content_creator']['platforms'])) {
                                    foreach($userInfo['content_creator']['platforms'] as $p) {
                                        if(!empty($p[$platform['value']])) {
                                            
                                            $checked = $p[$platform['value']];
                                        }
                                        if ($platform['inputText']) {
                                            if (!empty($p[$platform['value'].'_text'])){
                                                $platform_text = $p[$platform['value'].'_text'];
                                            }
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="content_creator[platforms][][<?= $platform['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-platform" 
                                        type="checkbox"
                                        name="content_creator[platforms][]"
                                        id="<?= 'platform' . $platform['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $platform['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'platform' . $platform['value'] ?>">
                                    
                                    <?php if (!$platform['inputText']): ?>
                                        <?= $platform['label'] ?>
                                    <?php else: ?>
                                        <span class="row">
                                            <span class="col-12">
                                                <?= $platform['label'] ?>
                                            </span>
                                            <span class="col-12">
                                                    <input id="<?= 'platform_' . $platform['value'] ?>_text"
                                                            name="content_creator[platforms][][<?= $platform['value'] ?>_text]"
                                                            type="text"
                                                            value="<?= $platform_text; ?>"
                                                            placeholder="<?= $platform['placeholder'] ?>"
                                                            class="form-control <?= $checked ? '' : 'd-none' ?>">
                                            </span>
                                        </span>
                                    <?php endif; ?>
                                </label>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /platforms -->
            
            <!-- partner games -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Would you like to partner for?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'black_squad', 'label' => 'Black Squad'],
                        ['value' => 'all_games', 'label' => 'All Games'],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $game): ?>
                        <?php
                            $checked = 0;
                            if(!empty($userInfo['content_creator']['partner_games'])) {
                                foreach($userInfo['procontent_creator_gamer']['partner_games'] as $c) {
                                    if(!empty($c[$game['value']])) {
                                        $checked = $c[$game['value']];
                                    }
                                }
                            }
                        ?>
                        <div class="form-check custom-control custom-checkbox">
                            <input type='hidden' name="content_creator[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                 <?= $checked ? "checked" : ""  ?>
                                id="<?= 'content_creator_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'content_creator_' . $game['value'] ?>">
                                <?= $game['label'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /partner games -->


            <!-- submit -->
            <div class="form-group row mt-6 mb-0 submit-wrapper">
                <div class="col-12 col-sm-6"></div>
                <div class="col-12 col-sm-6">
                   <?php echo $this->Form->submit(__('Submit'), [
                        'class' => 'btn btn-lg btn-primary float-right  mx-2 text-dark',
                    ]); ?>

                    <?php echo $this->Form->button(__('Cancel'), [
                        'class' => 'btn btn-lg btn-secondary float-right mx-2',
                    ]); ?>
                </div>
            </div>
            <!-- /submit --> 
                    
        <?= $this->Form->end(); ?>
    </div> <!-- /card-body -->
</div> <!-- /card -->