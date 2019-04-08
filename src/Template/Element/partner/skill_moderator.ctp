<div class="card card-information my-3  d-none" id="moderators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Moderator') ?></span>
            <span class="text-light">information</span>
            <span class="float-right">
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
                <label class="col-4 text-primary">
                    <?= __('How you want to be called') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('moderators[username]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /username -->

            <!-- discord -->
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
                        <?php echo $this->Form->text('moderators[discord]', [
                            'class' => 'form-control',
                            'placeholder' => 'Discord ID'
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /discord -->

            <!-- have previous experience -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Do you have previous experience as a moderator?') ?> *
                </label>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="moderators[moderatorExperient]" id="moderatorExperientYes" value="1">
                        <label class="form-check-label" for="moderatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="moderators[moderatorExperient]" id="moderatorExperientNo" value="0">
                        <label class="form-check-label" for="moderatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->

            <!-- partner games -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Would you like to partner for?') ?> *
                </label>
                <div class="col-8">
                    <?php
                    $games_dummyData = [
                        ['value' => 'black_squad', 'label' => 'Black Squad'],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="form-check">
                            <input type='hidden' name="moderators[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input" type="checkbox"
                                id="<?= 'moderators_' . $game['value'] ?>"/>
                            <label class="form-check-label"
                                for="<?= 'moderators_' . $game['value'] ?>">
                                <?= $game['label'] ?>
                            </label>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
            <!-- /partner games -->

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