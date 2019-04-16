<div class="card card-information my-3  d-none" id="testers_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Tester'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <button type="button"
                        class="btn btn-sm text-dark btn-primary btn-update">
                    <?= __('Update'); ?>
                </button>
            </span>
        </h4>

        <?php echo $this->Form->create(null, [
                        'id' => 'formPartnerTester',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- have previous experience -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Do you have previous experience as a tester?') ?> *
                </label>

                <div class="col-12 col-sm-8">
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="testers[testerExperient]" 
                            id="testerExperientYes"
                            value="1"/>

                        <label class="form-radio-label custom-control-label" for="testerExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="testers[testerExperient]" 
                            id="testerExperientNo"
                            value="0"/>
                        <label class="form-check-label custom-control-label" for="testerExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

            <!-- type of tester -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What type of testing do you prefer?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'quality_assurance', 'label' => 'Quality Assurance (QA)'],
                        ['value' => 'gameplay_experience', 'label' => 'Gameplay Experience'],
                    ];
                    ?>

                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="custom-radio">
                            <input class="form-check-input flex-column custom-control-input" type="radio"
                                   name="testers[type_of_tester]"
                                   value="<?= $game['value'] ?>"
                                   id="<?= 'game' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                   for="<?= 'game' . $game['value'] ?>">
                                <?= $game['label'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <!-- /type of tester -->

            <!-- type of games -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game or games you have a lot of experience?') ?>
                </label>

                <?php
                $type_of_games_dummyData = [
                    ["label" => "Shooter",   "value" => "shooter"],
                    ["label" => "MOBA",  "value" => "moba"],
                    ["label" => "RPG",   "value" => "rpg"],
                    ["label" => "MMORPG",    "value" => "mmorpg"],
                    ["label" => "Mobile",    "value" => "mobile"],
                    ["label" => "Adventure", "value" => "adventure"],
                    ["label" => "Indie", "value" => "indie"],
                    ["label" => "Strategy",  "value" => "strategy"],
                    ["label" => "Adventure", "value" => "adventure"],
                    ["label" => "Action",    "value" => "action"],
                    ["label" => "Simulators",    "value" => "simulators"],
                    ["label" => "Puzzle",    "value" => "puzzle"],
                    ["label" => "Browser",   "value" => "browser"],
                    ["label" => "Others", "value" => "others"]
                ]
                ?>
                <div class="col-12 col-sm-8">
                    <?php foreach ($type_of_games_dummyData as $type): ?>
                    <div class="row  pb-2">
                        <span class="col-12 text-warning">
                            <?= __($type['label']) ?>
                        </span>
                        <span class="col-12">
                            <div class="view py-2 px-3">

                            </div>
                            <div class="edit-tag-input">
                                <input name="testers[game_experience][<?= __($type['value']) ?>]"
                                        type="text"
                                        data-role="tagsinput"
                                        value=""
                                        class="form-control">
                            </div>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <!-- /type of games -->

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
                            <input type='hidden' name="testers[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                id="<?= 'testers_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'testers_' . $game['value'] ?>">
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