<div class="card card-information my-3  d-none" id="casters_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Caster') ?></span>
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
                        'id' => 'formPartnerCaster',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- username -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('How you want to be called') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text flex-column">
                        <?php echo $this->Form->text('casters[username]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- channels -->
            <h6 class="text-primary"> Your main channel(s):</h6>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Youtube') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('casters[youtube]', [
                            'class' => 'form-control',
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
                    <div class="edit-text">
                        <?php echo $this->Form->text('casters[twitch]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /channels -->


            <!-- pro gamer at -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game or games you like to play') ?>
                    *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="row  pb-2">
                            <span class="col-12 text-warning">
                                <?= __('I cast at these games:'); ?>
                            </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input flex-column">
                                <input name="casters[cast_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value=""
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
                                <input  name="casters[cast_type_games]"
                                        type="text"
                                        data-role="tagsinput"
                                        value=""
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
                        ['value' => 'other_games', 'label' => 'Other games'],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="form-check custom-control custom-checkbox">
                            <input type='hidden' name="casters[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                id="<?= 'casters_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'casters_' . $game['value'] ?>">
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