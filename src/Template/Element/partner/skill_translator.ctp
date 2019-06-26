<div class="card card-information my-3 d-none" id="translators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Translator') ?></span>
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
                        'id' => 'formPartnerTranslator',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- have previous experience -->
            <?php 
                $ratioYesChecked = false;
                $ratioNoChecked = false;
                if(!empty($userInfo['translator']['translatorExperient'])){
                    if($userInfo['translator']['translatorExperient'] == 1) {
                        $ratioYesChecked = true;
                    } else {
                        $ratioNoChecked = true;
                    }
                } 
            ?>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Do you have previous experience as a translator?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="translator[translatorExperient]" 
                            id="translatorExperientYes"                            
                            value="1"
                            <?= $ratioYesChecked ? "checked" : ""  ?>
                        />

                        <label class="form-radio-label custom-control-label" for="translatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="translator[translatorExperient]" 
                            id="translatorExperientNo"
                            <?= $ratioNoChecked ? "checked" : ""  ?>
                            value="0"/>
                        <label class="form-check-label custom-control-label" for="translatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

            <!-- how do you translate -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <span class="align-middle">
                        <?= __('How would you translate this in your language?');?>
                        <span class="text-warning">
                            “You must become a hero in your world, crossing paths with other counterparts from other worlds to stop a threat for all worlds”
                        </span>
                    </span>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-textarea flex-column">
                        <textarea class="form-control" name="translator[translate_example]" rows="5"><?php if(!empty($userInfo['translator']['translatorExperient'])) {
                                echo $userInfo['translator']['translate_example'];
                            } ?></textarea>
                        
                    </div>                    
                </div>
            </div>
            <!-- /how do you translate -->

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
                                if(!empty($userInfo['translator']['partner_games'])) {
                                    foreach($userInfo['translator']['partner_games'] as $p) {
                                        if(!empty($p[$partner_game['value']])) {
                                            
                                            $checked = $p[$partner_game['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="translator[partner_games][][<?= $partner_game['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="translator[partner_games][]"
                                        id="translator_partner_game<?= $partner_game['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $partner_game['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'translator_partner_game' . $partner_game['value'] ?>">
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