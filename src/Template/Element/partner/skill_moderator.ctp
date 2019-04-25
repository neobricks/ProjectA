<div class="card card-information my-3  d-none" id="moderators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Moderator') ?></span>
            <span class="text-light">information</span>
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
                        'id' => 'formPartnerModerator',
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
                        <?php echo $this->Form->text('moderator[username]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['moderator']['username']) ? $userInfo['moderator']['username'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- discord -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Discord') ?>
                </label>
                <div class="col-12 col-sm-8">
                <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('moderator[discord]', [
                            'class' => 'form-control',
                            'placeholder' => 'Discord ID'
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /discord -->

            <!-- have previous experience -->
            <?php 
                $ratioYesChecked = false;
                $ratioNoChecked = false;
                if(!empty($userInfo['moderator']['moderatorExperient'])){
                    if($userInfo['moderator']['moderatorExperient'] == 1) {
                        $ratioYesChecked = true;
                    } else {
                        $ratioNoChecked = true;
                    }
                } 
            ?>
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Do you have previous experience as a moderator?') ?> *
                </label>
                <div class="col-12 col-sm-8">
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="moderator[moderatorExperient]" 
                            id="moderatorExperientYes"
                            value="1" 
                            <?= $ratioYesChecked ? "checked" : ""  ?>
                            />

                        <label class="form-radio-label custom-control-label" for="moderatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check custom-radio form-check-inline">
                        <input class="custom-control-input" 
                            type="radio" name="moderator[moderatorExperient]" 
                            id="moderatorExperientNo"
                            <?= $ratioNoChecked ? "checked" : ""  ?>
                            value="0"/>
                        <label class="form-check-label custom-control-label" for="moderatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

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
                        <?php
                            $checked = 0;
                            if(!empty($userInfo['moderator']['partner_games'])) {
                                foreach($userInfo['moderator']['partner_games'] as $c) {
                                    if(!empty($c[$game['value']])) {
                                        $checked = $c[$game['value']];
                                    }
                                }
                            }
                        ?>
                        <div class="form-check custom-control custom-checkbox">
                            <input type='hidden' name="moderator[partner_games][][<?= $game['value'] ?>]" value="<?= $checked; ?>" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                 <?= $checked ? "checked" : ""  ?>
                                id="<?= 'moderator_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'moderator_' . $game['value'] ?>">
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