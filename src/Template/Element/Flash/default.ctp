<?php
$class = 'message';
if (!empty($params['class'])) {
    $class .= ' ' . $params['class'];
}
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
echo $this->Html->scriptBlock( "toastr.info('$message');", ['block' => true]);


?>
<!--<div class="<?= h($class) ?>" onclick="this.classList.add('hidden');"><?= $message ?></div>-->
