<?php
$this->assign('title', __('Login'));
//$this->Html->meta('keywords', 'keywords, are, sweet', ['block' => true]);
//$this->Html->meta('description', 'Become a Partner', ['block' => true]);
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 offset py-9">
            <?= $this->element('/modals/public/signin', ['no_modal' => true]); ?>
        </div>
    </div>
</div>