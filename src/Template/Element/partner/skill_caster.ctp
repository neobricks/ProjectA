<div class="card card-information my-3  d-none" id="casters_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Caster') ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <span class="text-primary fs-3 fw-400 text-required-field">
                    * <?= __('Required field') ?>
                </span>
                <button type="button"
                        class="btn btn-sm text-dark btn-primary btn-update">
                    <?= __('Update'); ?>
                </button>
            </span>
        </h4>

        <?php echo $this->Form->create(null, [
                        'id' => 'formPartnerCaster',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- username -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('How do you want to be called') ?>? *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('caster[username]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['caster']['username']) ? $userInfo['caster']['username'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- channels -->
            <h6 class="text-primary"> <?= __('Your main channel(s)') ?>: *</h6>
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
                        <?php echo $this->Form->text('caster[youtube]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['youtube']) ? $userInfo['caster']['youtube'] : '',
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
                        <?php echo $this->Form->text('caster[twitch]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['twitch']) ? $userInfo['caster']['twitch'] : '',
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
                        <?php echo $this->Form->text('caster[twitter]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['twitter']) ? $userInfo['caster']['twitter'] : '',
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
                        <?php echo $this->Form->text('caster[discord]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['discord']) ? $userInfo['caster']['discord'] : '',
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
                        <?php echo $this->Form->text('caster[instagram]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['instagram']) ? $userInfo['caster']['instagram'] : '',
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
                        <?php echo $this->Form->text('caster[other]', [
                            'class' => 'form-control caster_channel',
                            'value' => !empty($userInfo['caster']['other']) ? $userInfo['caster']['other'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /social networks -->


            <!-- pro gamer at -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game or games do you like to cast?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="row  pb-2">
                            <span class="col-12 text-warning">
                                <?= __('I cast these games:'); ?>
                            </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input flex-column">
                                <input name="caster[cast_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value="<?= !empty($userInfo['caster']['cast_games']) ? $userInfo['caster']['cast_games'] : ''; ?>"
                                        placeholder="Black Squad, PUBG, Fortnite, CS:GO, Apex Legends, Overwatch…"
                                        class="form-control">
                            </div>
                        </span>
                    </div>
                    <div class="row pb-2">
                            <span class="col-12 text-warning">
                                <?= __('I cast these types of games:'); ?>
                            </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input flex-column">
                                <input  name="caster[cast_type_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value="<?= !empty($userInfo['caster']['cast_type_games']) ? $userInfo['caster']['cast_type_games'] : ''; ?>"
                                        placeholder="Shooter, RPG, MMORPG, MOBA, Anime style, JRPG, Indie, Strategy, Casual, Free to play, Pay to play, Hardcore games, Games for kids, Adventure…"
                                        class="form-control">
                            </div>
                            </span>
                    </div>
                </div>
            </div>
            <!-- /pro gamer at -->
 
            <!-- partner games -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Would you like to partner for?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'black_squad', 'label' => 'Black Squad'],
                        ['value' => 'all_games', 'label' => __('All games')],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $partner_game): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $partner_game['value'] ?>">
                                <?= $partner_game['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox ">
                            <?php
                                $checked = 0;
                                $partner_game_text = "";
                                if(!empty($userInfo['caster']['partner_games'])) {
                                    foreach($userInfo['caster']['partner_games'] as $p) {
                                        if(!empty($p[$partner_game['value']])) {
                                            
                                            $checked = $p[$partner_game['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="caster[partner_games][][<?= $partner_game['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="caster[partner_games][]"
                                        id="caster_partner_game<?= $partner_game['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $partner_game['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'caster_partner_game' . $partner_game['value'] ?>">
                                    <?= $partner_game['label'] ?>
                                </label>
                            </div>

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