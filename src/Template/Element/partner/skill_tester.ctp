<div class="card card-information my-3  d-none" id="testers_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Tester'); ?></span>
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
                        'id' => 'formPartnerTester',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- have previous experience -->
            <?php 
                $ratioYesChecked = false;
                $ratioNoChecked = false;
                if(!empty($userInfo['tester']['testerExperient'])){
                    if($userInfo['tester']['testerExperient'] == 1) {
                        $ratioYesChecked = true;
                    } else {
                        $ratioNoChecked = true;
                    }
                } 
            ?>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Do you have previous experience as a tester?') ?> *
                </label>

                <div class="col-12 col-sm-8">
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="tester[testerExperient]" 
                            id="testerExperientYes"
                            <?= $ratioYesChecked ? "checked" : ""  ?>
                            value="1"/>

                        <label class="form-radio-label custom-control-label" for="testerExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="tester[testerExperient]" 
                            <?= $ratioNoChecked ? "checked" : ""  ?>
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
                    $testerTypes = [
                        ['value' => 'quality_assurance', 'label' => 'Quality Assurance (QA)'],
                        ['value' => 'gameplay_experience', 'label' => 'Gameplay Experience'],
                    ];
                    ?>
                    <?php foreach ($testerTypes as $testerType): ?>
                        <div class="view">
                            <span class="checkbox-value" data-value="<?= $testerType['value'] ?>">
                                <?= $testerType['label'] ?>
                            </span>
                        </div>
                        <div class="edit-checkbox ">
                            <?php
                                $checked = 0;
                                $testerType_text = "";
                                if(!empty($userInfo['tester']['type_of_tester']) && is_array($userInfo['tester']['type_of_tester']) ) {
                                    foreach($userInfo['tester']['type_of_tester'] as $p) {
                                        if(!empty($p[$testerType['value']])) {
                                            $checked = $p[$testerType['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="tester[type_of_tester][][<?= $testerType['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="tester[type_of_tester][]"
                                        id="type_tester<?= $testerType['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $testerType['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'type_tester' . $testerType['value'] ?>">
                                    <?= $testerType['label'] ?>
                                </label>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- /type of tester -->

            <!-- type of games -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What game or games do you have a lot of experience with?') ?>
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
                                <input name="tester[game_experience][<?= $type['value'] ?>]"
                                        type="text"
                                        data-role="tagsinput"
                                        value="<?= !empty($userInfo['tester']['game_experience'][$type['value']]) ? $userInfo['tester']['game_experience'][$type['value']] : ''; ?>"
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
                                if(!empty($userInfo['tester']['partner_games'])) {
                                    foreach($userInfo['tester']['partner_games'] as $p) {
                                        if(!empty($p[$partner_game['value']])) {
                                            
                                            $checked = $p[$partner_game['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="tester[partner_games][][<?= $partner_game['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="tester[partner_games][]"
                                        id="tester_partner_game<?= $partner_game['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $partner_game['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'tester_partner_game' . $partner_game['value'] ?>">
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