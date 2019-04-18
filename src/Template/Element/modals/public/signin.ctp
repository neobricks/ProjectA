<?php if (!isset($no_modal)) : ?>
    <div class="modal fade" id="modalSignIn" tabindex="-1" role="dialog" aria-labelledby="modalSignIn" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content bg-dark">
            <?php endif; ?>
            <div class="modal-header border-secondary py-2">
                <h5 class="modal-title text-warning">
                    <?= __('Sign In') ?>
                </h5>
                <?php if (!isset($no_modal)) : ?>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <?php endif; ?>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->create(null, [
                    'id' => 'formSignIn',
                    'url' => ['controller' => 'auth', 'action' => 'login'],
                    'class' => 'input-transparent material pt-4',
                    'type' => 'post'
                ]); ?>

                <div class="group">
                    <?php echo $this->Form->text('email', [
                        'required' => true,

                    ]); ?>
                    <span class="highlight"></span>
                    <label class="mat"><?= __("Email") ?></label>
                </div>

                <div class="group">
                    <?php echo $this->Form->password('pw', [
                        'required' => true,

                    ]); ?>
                    <span class="highlight"></span>
                    <label class="mat"><?= __("Password") ?></label>
                </div>

                <div class="form-group d-flex justify-content-between">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
                        <label class="custom-control-label" for="rememberMeCheck">Remember me</label>
                    </div>
                    <a class="small-3" href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#modalForgetPassword">Forgot password?</a>
                </div>


                <div class="form-group row mt-6 mb-0">
                    <div class="col-12">
                        <button class="btn btn-block btn-warning" type="submit">
                            <?= __('SIGN IN') ?>
                        </button>
                        <p class="small text-left mt-2 py-4 mb-0">
                            <?= __('Don\'t have an account?') ?>
                            <a class="bold" href="javascript:void(0)" data-dismiss="modal" data-toggle="modal" data-target="#modalSignUp">
                                <?= __('Create an account'); ?>
                            </a>
                        </p>
                    </div>
                </div>
                <?= $this->Form->end(); ?>
            </div>
            <?php if (!isset($no_modal)) : ?>
            </div>
        </div>
    </div>
<?php endif; ?>