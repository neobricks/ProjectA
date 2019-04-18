<div class="modal fade" id="modalForgetPassword" tabindex="-1" role="dialog" aria-labelledby="modalForgetPassword" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark">
            <div class="modal-header border-secondary">
                <h5 class="modal-title text-warning">
                    <?= __('Forget Password') ?>
                </h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo $this->Form->create(null, [
                    'id' => 'formForgetPassword',
                    'url' => ['controller' => 'auth', 'action' => 'forgot-password'],
                    'class' => 'input-transparent  material pt-4',
                    'type' => 'post'
                ]); ?>
                <p> <?= __('Enter your email to reset your Password.'); ?></p>

                <!-- Input Email -->
                <div class="group">
                    <?php echo $this->Form->text('email', [
                        'required' => true,
                    ]); ?>
                    <span class="highlight"></span>
                    <label class="mat"><?= __("Email") ?></label>
                </div>
                <!-- /Input Email -->

                <div class="form-group row mt-6 mb-0">
                    <div class="col-12">
                        <button class="btn btn-block btn-warning" type="submit">
                            <?= __('Submit') ?>
                        </button>
                        <p class="small text-leftmt-2 py-4 mb-0">
                            <?= __('Did you remember your password?') ?>
                            <a class="bold" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modalSignIn">
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