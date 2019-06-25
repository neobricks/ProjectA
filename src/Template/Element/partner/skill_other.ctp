<div class="card card-information my-3  d-none" id="others_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Other') ?></span>
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
                        'id' => 'formPartnerOther',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- special skill -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What is your special skill or experience?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="other[special_skill_text]" class="form-control"><?php if(!empty($userInfo['other']['special_skill_text'])) {
                                echo $userInfo['other']['special_skill_text'];
                            } ?></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /special skill -->

            <!-- What kind of opportunities -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                            <span class="align-middle">
                                <?= __('What kind of opportunities are you looking for?');?>
                            </span>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="other[opportunities_text]" class="form-control"><?php if(!empty($userInfo['other']['opportunities_text'])) {
                                echo $userInfo['other']['opportunities_text'];
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
                                if(!empty($userInfo['other']['partner_games'])) {
                                    foreach($userInfo['other']['partner_games'] as $p) {
                                        if(!empty($p[$partner_game['value']])) {
                                            
                                            $checked = $p[$partner_game['value']];
                                        }
                                    }
                                }
                            ?>
                            <div class="custom-control custom-checkbox form-check">
                                <input type='hidden' name="other[partner_games][][<?= $partner_game['value'] ?>]" value="<?= $checked; ?>" />
                                <input class="form-check-input custom-control-input checkbox-partner_game" 
                                        type="checkbox"
                                        name="other[partner_games][]"
                                        id="other_partner_game<?= $partner_game['value'] ?>"
                                        <?= $checked ? "checked" : ""  ?>
                                        data-value="<?=  $partner_game['value']?>"
                                        />
                                <label class="form-check-label w-100 custom-control-label"
                                        for="<?= 'other_partner_game' . $partner_game['value'] ?>">
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