<div class="card card-information my-3  d-none" id="companies_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Company'); ?></span>
            <span class="text-light"><?= __('information') ?></span>
            <span class="float-right">
                <button type="button"
                        class="btn btn-sm text-dark btn-primary btn-update">
                    <?= __('Update'); ?>
                </button>
            </span>
        </h4>

        <?php echo $this->Form->create(null, [
                        'id' => 'formPartnerCompany',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- company name -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Name of your company:') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('companies[name]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /company name -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What your company do or sale?') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('companies[name]', [
                            'class' => 'form-control',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /what company do/sale -->

            <!-- preferred business contact -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Preferred business contact') ?>
                </label>
                <div class="col-8">

                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Email
                        </label>
                        <div class="col-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('companies[contact][][email]', [
                                    'class' => 'form-control',
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Phone
                        </label>
                        <div class="col-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('companies[contact][][phone]', [
                                    'class' => 'form-control',
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 text-warning">
                            Skype
                        </label>
                        <div class="col-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('companies[contact][][skype]', [
                                    'class' => 'form-control',
                                ]); ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- preferred business contact -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('What kind of opportunities are you looking for?') ?>
                </label>
                <div class="col-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="companies[kind_of_opportunities]" class="form-control"></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /what company do/sale -->

            <!-- country list -->
            <div class="form-group row">
                <label class="col-4 text-primary">
                    <?= __('Country(ies) available for partnership:') ?>*
                </label>
                <div class="col-8">
                    <select class="custom-select">
                        <option value="">asddsa
                        </option>
                        <option value="">dsad
                        </option>
                        <option value="">dsadsa
                        </option>
                    </select>

                </div>
            </div>
            <!-- /country list -->

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
                            <input type='hidden' name="companies[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input" type="checkbox"
                                id="<?= 'companies_' . $game['value'] ?>"/>
                            <label class="form-check-label"
                                for="<?= 'companies_' . $game['value'] ?>">
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