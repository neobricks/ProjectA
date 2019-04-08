<div class="card card-information my-3 d-none" id="translators_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Translator') ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
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
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Do you have previous experience as a translator?') ?> *
                </label>
                <div class="col-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="translators[translatorExperient]" id="translatorExperientYes" value="1">
                        <label class="form-check-label" for="translatorExperientYes"><?= __('Yes'); ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="translators[translatorExperient]" id="translatorExperientNo" value="0">
                        <label class="form-check-label" for="translatorExperientNo"><?= __('No') ?></label>
                    </div>
                </div>
            </div>
            <!-- /have previous experience -->


            <!-- how do you translate -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <span class="align-middle">
                        <?= __('How would you translate this on your language:');?>
                        <span class="text-warning">
                            “You must become a hero in your world, crossing path with other counterparts from other worlds to stop a threat for all worlds”
                        </span>
                        ? *
                    </span>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-textarea flex-column">
                        <textarea class="form-control" name="translators[translate_example]"></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /how do you translate -->

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
                            <input type='hidden' name="translators[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input" type="checkbox"
                                id="<?= 'translators_' . $game['value'] ?>"/>
                            <label class="form-check-label"
                                for="<?= 'translators_' . $game['value'] ?>">
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