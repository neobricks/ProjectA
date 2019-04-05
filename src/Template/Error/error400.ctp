<?php
use Cake\Core\Configure;
use Cake\Error\Debugger;

$this->layout = 'error';

if (Configure::read('debug')) :
    $this->layout = 'dev_error';

    $this->assign('title', $message);
    $this->assign('templateName', 'error400.ctp');

    $this->start('file');
?>
<?php if (!empty($error->queryString)) : ?>
    <p class="notice">
        <strong>SQL Query: </strong>
        <?= h($error->queryString) ?>
    </p>
<?php endif; ?>
<?php if (!empty($error->params)) : ?>
        <strong>SQL Query Params: </strong>
        <?php Debugger::dump($error->params) ?>
<?php endif; ?>
<?= $this->element('auto_table_warning') ?>
<?php
if (extension_loaded('xdebug')) :
    xdebug_print_function_stack();
endif;

$this->end();
else:
    $this->assign('templateName', 'error400.ctp');
endif;
?>

<p class="error">
    <a class="navbar-brand logo"
        href="<?= $this->Url->Build('/'); ?>">
        <?php echo $this->Html->image('/public/assets/img/logo.png', [
            'class' => 'd-none d-md-inline mb-6',
            'alt' => '404'
        ]); ?>
    </a>

    <h2 class="display-md-4"><?= h($message) ?></h2>
    <p class="lead"><?= __('You may have mistyped the address or the page may have moved.'); ?></p>
    <br>
    
    <?= __d('cake', 'The requested address {0} was not found on this server.', "<strong>'{$url}'</strong>") ?>
</p>
