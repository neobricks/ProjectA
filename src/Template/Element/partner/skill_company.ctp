<div class="card card-information my-3  d-none" id="companies_wrapper">
    <div class="card-body">
        <h4 class="card-title">
            <span class="text-primary"><?= __('Company'); ?></span>
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
                        'id' => 'formPartnerCompany',
                        'url' => ['controller' => 'partner', 'action' => 'information'],
                        'class' => 'input-transparent',
                        'type' => 'post'
                    ]); ?>

            <!-- company name -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Name of your company:') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('company[name]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['company']['name']) ? $userInfo['company']['name'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>
            <!-- /company name -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What your company do or sale?') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                           
                        </p>
                    </div>
                    <div class="edit-text">
                        <?php echo $this->Form->text('company[sales]', [
                            'class' => 'form-control',
                            'value' => !empty($userInfo['company']['sale']) ? $userInfo['company']['sale'] : '',
                        ]); ?>
                    </div>
                </div>
            </div>

            <!-- /what company do/sale -->

            <!-- preferred business contact -->
            <?php
                # XGH
                $email = "";
                $phone = "";
                $skype = "";
                if(!empty($userInfo['company']['contact'])) {
                    foreach($userInfo['company']['contact'] as $c) {
                        if(!empty($c['email'])) {
                            $email = $c['email'];
                        } else if(!empty($c['phone'])) {
                            $phone = $c['phone'];
                        } else if(!empty($c['skype'])) {
                            $skype = $c['skype'];
                        } 
                    }
                }
            ?>

            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Preferred business contact') ?>
                </label>
                <div class="col-12 col-sm-8">

                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            Email
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][email]', [
                                    'class' => 'form-control',
                                    'value' => $email
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            Phone
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][phone]', [
                                    'class' => 'form-control',
                                    'value' => $phone
                                ]); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 text-warning">
                            Skype
                        </label>
                        <div class="col-12 col-sm-9">
                            <div class="view py-2 px-3">
                                <p>
                                
                                </p>
                            </div>
                            <div class="edit-text">
                                <?php echo $this->Form->text('company[contact][][skype]', [
                                    'class' => 'form-control',
                                    'value' => $skype
                                ]); ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- preferred business contact -->

            <!-- what company do/sale -->
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('What kind of opportunities are you looking for?') ?>
                </label>
                <div class="col-12 col-sm-8">
                    <div class="view py-2 px-3">
                        <p>
                        
                        </p>
                    </div>
                    <div class="edit-textarea">
                        <textarea name="company[kind_of_opportunities]" class="form-control"><?php if(!empty($userInfo['company']['kind_of_opportunities'])) {
                                echo $userInfo['company']['kind_of_opportunities'];
                            } ?></textarea>
                    </div>                    
                </div>
            </div>
            <!-- /what company do/sale -->

            <!-- country list -->
            <!--
            <div class="form-group row">
                <label class="col-12 col-sm-4 text-primary">
                    <?= __('Country(ies) available for partnership:') ?>*
                </label>
                <div class="col-12 col-sm-8">
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
            -->
            <!-- /country list -->

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
                            if(!empty($userInfo['company']['partner_games'])) {
                                foreach($userInfo['company']['partner_games'] as $c) {
                                    if(!empty($c[$game['value']])) {
                                        $checked = $c[$game['value']];
                                    }
                                }
                            }
                        ?>
                        <div class="form-check custom-control custom-checkbox">
                            <input type='hidden' name="company[partner_games][][<?= $game['value'] ?>]" value="0" />
                            <input class="form-check-input custom-control-input"
                                 type="checkbox"
                                 <?= $checked ? "checked" : "" ?>
                                id="<?= 'company_' . $game['value'] ?>"/>
                            <label class="form-check-label custom-control-label"
                                for="<?= 'company_' . $game['value'] ?>">
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