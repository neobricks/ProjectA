
<div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog"
     aria-labelledby="modalSignIn" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning">
                    <?= __('Sign In') ?>
                </h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->create(null, [
                    'id' => 'formSignIn',
                    'url' => ['controller' => 'auth', 'action' => 'login'],
                    'class' => 'input-transparent',
                    'type' => 'post'
                ]); ?>

                    <div class="form-group">
                        <?php echo $this->Form->email('email', [
                            'class' => 'form-control',
                            'placeholder' => __("Email")
                        ]); ?>
                    </div>

                    <div class="form-group">
                        <?php echo $this->Form->password('pw', [
                            'class' => 'form-control',
                            'placeholder' => __("Password")
                        ]); ?>

                        <small class="mb-0 py-4 text-right">
                            <a class="bold" href="javascript:void(0)"
                                data-dismiss="modal"
                                data-toggle="modal"
                                data-target="#modalForgetPassword">
                                <?= __('Forget your password?'); ?>
                            </a>
                        </small>

                    </div>
                   
                    <div class="form-group row mt-6 mb-0">
                        <div class="col-12">
                            <button class="btn btn-block btn-warning"
                                    type="submit">
                                <?= __('SIGN IN') ?>
                            </button>
                            <p class="small text-center py-2 mb-0">
                                <?= __('Don\'t have an account?') ?>
                                <a class="bold" href="javascript:void(0)"
                                   data-dismiss="modal"
                                   data-toggle="modal"
                                   data-target="#modalSignUp">
                                    <?= __('Create an account'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>