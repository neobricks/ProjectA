<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog"
     aria-labelledby="modalSignUp" aria-hidden="true">
    <div class="modal-dialog modal-sm  modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning">
                    <?= __('Sign Up') ?>
                </h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo $this->Form->create(null, [
                    'id' => 'formSignUp',
                    'url' => ['controller' => 'auth', 'action' => 'register'],
                    'class' => 'input-transparent',
                    'type' => 'post'
                ]); ?>

                    <!-- input email -->
                    <div class="form-group row">
                        <div class="col-12">
                            <?php echo $this->Form->email('email', [
                                'class' => 'form-control',
                                'placeholder' => __("Email")
                            ]); ?>
                        </div>
                    </div>
                    <!-- /input email -->

                    <!-- input password -->
                    <div class="form-group row">
                        <div class="col-12">
                            <?php echo $this->Form->password('password', [
                                'id' => 'signup_password',
                                'class' => 'form-control',
                                'placeholder' => __("Password")
                            ]); ?>
                        </div>
                    </div>
                    <!-- /input password -->

                    <!-- input confirm password -->
                    <div class="form-group row">
                        <div class="col-12">
                            <?php echo $this->Form->password('confirm_password', [
                                'class' => 'form-control',
                                'placeholder' => __("Confirm Password")
                            ]); ?>
                        </div>
                    </div>
                    <!-- /input confirm password -->

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
                                                <?= __('I’ve read and accepted the Terms & Conditions and Privacy Policy'); ?>
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
                        #formSignUp .custom-checkbox .custom-control-input ~ .custom-control-label::before{
                            min-width: 20px;
                            height: 20px;
                        }
                    </style>
                    <!-- /checkboxes terms -->


                    <!-- submit button -->
                    <div class="form-group row mt-6 mb-0">
                        <div class="col-12">
                            <button class="btn btn-block btn-warning text-uppercase"
                                    type="submit">
                                <?= __('Register') ?>
                            </button>
                            <p class="small text-left py-2 mb-0">
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