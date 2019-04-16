<div class="card card-information my-3  d-none" id="others_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Other') ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
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
                <label class="col-4 text-primary">
                    <?= __('What is your special skill or experience?') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="others[special_skill_text]" class="form-control"></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /special skill -->

            <!-- What kind of opportunities -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('What kind of opportunities are you looking for?');?> *
                            </span>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="others[opportunities_text]" class="form-control"></textarea>
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
                        ['value' => 'other_games', 'label' => 'Other games'],
                    ];
                    ?>
                    <?php foreach ($games_dummyData as $game): ?>
                        <div class="form-check custom-control custom-checkbox">
                            <input type='hidden' name="others[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                id="<?= 'others_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'others_' . $game['value'] ?>">
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