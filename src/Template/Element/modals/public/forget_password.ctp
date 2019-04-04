<div class="modal fade" id="modalForgetPassword" tabindex="-1" role="dialog"
     aria-labelledby="modalForgetPassword" aria-hidden="true">
    <div class="modal-dialog modal-dm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning">
                    <?= __('Forget Password') ?>
                </h5>
                <button type="button" class="close text-light"
                        data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo $this->Form->create(null, [
                    'id' => 'formForgetPassword',
                    'url' => ['controller' => 'auth', 'action' => 'register'],
                    'class' => 'input-transparent',
                    'type' => 'post'
                ]); ?>

                    <p> <?= __('Enter your email to reset your Password.'); ?></p>

                    <!-- Input Email -->
                    <div class="form-group row">
                        <label class="col-4 text-primary">
                            <span class="align-middle">
                                <?= __('Email') ?>
                            </span>
                        </label>
                        <div class="col-8">
                            <?php echo $this->Form->email('email', [
                                'class' => 'form-control',
                            ]); ?>
                        </div>
                    </div>
                    <!-- /Input Email -->


                    <div class="form-group row mt-6 mb-0">
                        <div class="col-4"></div>
                        <div class="col-8">
                            <button class="btn btn-block btn-warning"
                                    type="submit">
                                <?= __('Submit') ?>
                            </button>
                            <p class="small text-center py-2 mb-0">
                                <?= __('Did you remember your password?') ?>
                                <a class="bold" href="javascript:void(0)"
                                   data-dismiss="modal"
                                   data-toggle="modal"
                                   data-target="#modalSignIn">
                                    <?= __('Sign In'); ?>
                                </a>
                            </p>
                        </div>
                    </div>

                <?= $this->Form->end(); ?>

            </div>
        </div>
    </div>
</div>