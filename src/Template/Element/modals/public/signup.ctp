<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog"
     aria-labelledby="modalSignUp" aria-hidden="true">
    <div class="modal-dialog modal-sm  modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary py-2">
                <h5 class="modal-title text-warning">
                    <?= __('Sign Up') ?>
                </h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


<!--------------------------------------------------->


<div>
                <div class="text-center my-6"> 
                <?php
                echo $this->Form->postLink('<span class="btn btn-circle btn-sm btn-google mr-2" href=""><i class="fab fa-google"></i></span>',
                    [
                        'prefix' => false,
                        'plugin' => 'ADmad/SocialAuth',
                        'controller' => 'Auth',
                        'action' => 'login',
                        'provider' => 'google',
                        '?' => ['redirect' => $this->request->getQuery('redirect')]
                    ],
                    ['escape' => false]
                );
                echo $this->Form->postLink(
                    '<span class="btn btn-circle btn-sm btn-facebook mr-2" href=""><i class="fab fa-facebook-f"></i></span>',
                    [
                        'prefix' => false,
                        'plugin' => 'ADmad/SocialAuth',
                        'controller' => 'Auth',
                        'action' => 'login',
                        'provider' => 'facebook',
                        '?' => ['redirect' => $this->request->getQuery('redirect')]
                    ],
                    ['escape' => false]
                ); 
                /*echo $this->Form->postLink(
                    '<span class="btn btn-circle btn-sm btn-twitter mr-2" href=""><i class="fab fa-twitter"></i></span>',
                    [
                        'prefix' => false,
                        'plugin' => 'ADmad/SocialAuth',
                        'controller' => 'Auth',
                        'action' => 'login',
                        'provider' => 'twitter',
                        '?' => ['redirect' => $this->request->getQuery('redirect')]
                    ],
                    ['escape' => false]
                );*/

                echo $this->Form->postLink(
                    '<span class="btn btn-circle btn-sm btn-twitch" href=""><i class="fab fa-twitch"></i></span></span>',
                    [
                        'prefix' => false,
                        'plugin' => 'ADmad/SocialAuth',
                        'controller' => 'Auth',
                        'action' => 'login',
                        'provider' => 'twitch',
                        '?' => ['redirect' => $this->request->getQuery('redirect')]
                    ],
                    ['escape' => false]
                ); 
                ?>
                </div>
                <span class="hr-text small my-6"><?= __("Or") ?></span> 

                </div>



















<!------------------------------------------------->



                <?php echo $this->Form->create(null, [
                    'id' => 'formSignUp',
                    'url' => ['controller' => 'auth', 'action' => 'register'],
                    'class' => 'input-transparent material',
                    'type' => 'post'
                ]); 
				

				?>

                    <div class="group">      
                         <?php echo $this->Form->text('email', [
                            'required' => true,
                            
                        ]); ?>
                        <span class="highlight"></span>
                        <label class="mat"><?= __("Email") ?></label>
                    </div>

                    <div class="group">      
                         <?php echo $this->Form->password('password', [
                            'required' => true,
                            'id' => 'signup_password'
                        ]); ?>
                        <span class="highlight"></span>
                        <label class="mat"><?= __("Password") ?></label>
                    </div>

                    <div class="group">      
                         <?php echo $this->Form->password('confirm_password', [
                            'required' => true,
                            
                        ]); ?>
                        <span class="highlight"></span>
                        <label class="mat"><?= __("Confirm password") ?></label>
                    </div>

                    <!-- checkboxes terms -->
                    <div class="form-group row">
                        <div class="col-12">
                            <div class="form-check d-flex mb-4">
                                <div class="custom-control custom-checkbox row">
                                    <div class="col-12 pl-0">
                                        <?php echo $this->Form->checkbox('terms', [
                                            'id' => 'signupCheckboxTerms',
                                            'class' => 'custom-control-input px-4',
                                            'hiddenField' => false
                                        ]); ?>
                                        <label class="custom-control-label form-check-label lh-3" for="signupCheckboxTerms">
                                            <small>
                                                <?php 
                                                    $temsNConditionsLink = $this->Html->link(
                                                        __('Terms & Conditions'),
                                                        '/terms-and-conditions'
                                                    );
                                                    $privacyPolicysLink =  $this->Html->link(
                                                        __('Privacy Policy'),
                                                        '/privacy-policy'
                                                    );
                                                ?>
                                                <?= __('I\'ve read and accepted the {0} and {1}', $temsNConditionsLink,  $privacyPolicysLink); ?>
                                            </small>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check d-flex mb-4">
                                <div class="custom-control custom-checkbox row">
                                    <div class="col-12 pl-0">
                                        <input type="checkbox" class="custom-control-input px-4"  id="signupCheckboxNews">
                                        <label class="custom-control-label form-check-label lh-3" for="signupCheckboxNews">
                                            <small>
                                            <?= __('NeoBricks can send me newsletters with offers and news from games not related to the Partner Program'); ?>
                                            </small>
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <style>
                        .custom-checkbox .custom-control-input ~ .custom-control-label::before{
                            min-width: 20px;
                            height: 20px;
                            align-self: flex-start;
                            margin-top: 4px;
                        }

                        .custom-checkbox .custom-control-input ~ .custom-control-label::after{
                           top:7px;
                        }
                    </style>
                    <!-- /checkboxes terms -->


                    <!-- submit button -->
                    <div class="form-group row mt-6 mb-0">
                        <div class="col-12">
                            <button class="btn btn-block btn-warning text-uppercase"
                                    type="submit">
                                <?= __('REGISTER') ?>
                            </button>
                            <p class="small text-left mt-2 py-4 mb-0">
                                <?= __('Already have an account?') ?>
                                <a class="bold" href="javascript:void(0)"
                                   data-dismiss="modal"
                                   data-toggle="modal"
                                   data-target="#modalSignIn">
                                    <?= __('Sign In'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- /submit button -->

                <?= $this->Form->end(); ?>

            </div> <!-- modal-body -->

        </div> <!-- modal-content -->
    </div> <!-- modal-dialog -->
</div> <!-- /modal -->