<?php
$this->assign('title', __('Reset Password'));
//$this->Html->meta('keywords', 'keywords, are, sweet', ['block' => true]);
//$this->Html->meta('description', 'Become a Partner', ['block' => true]);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 offset py-9">
            <div class="modal-header border-secondary py-2">
                <h5 class="modal-title text-warning">
                    <?= __('Reset password') ?>
                </h5>

            </div>
            <div class="modal-body">
                <?php echo $this->Form->create(null, [
                    'id' => 'formSignUp',
                    'class' => 'input-transparent material',
                    'type' => 'post'
                ]); ?>


                <div class="group">
                    <?php echo $this->Form->password('password', [
                        'required' => true,
                        'id' => 'signup_password'
                    ]); ?>
                    <span class="highlight"></span>
                    <label class="mat"><?= __("New password") ?></label>
                </div>

                <div class="group">
                    <?php echo $this->Form->password('confirm_password', [
                        'required' => true,

                    ]); ?>
                    <span class="highlight"></span>
                    <label class="mat"><?= __("Confirm password") ?></label>
                </div>




                <!-- submit button -->
                <div class="form-group row mt-6 mb-0">
                    <div class="col-12">
                        <button class="btn btn-block btn-warning text-uppercase" type="submit">
                            <?= __('RESET PASSWORD') ?>
                        </button>

                    </div>
                </div>
                <!-- /submit button -->

                <?= $this->Form->end(); ?>

            </div> <!-- modal-body -->
        </div>
    </div>