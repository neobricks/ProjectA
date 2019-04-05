<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
echo $this->Html->scriptBlock( "toastr.error('$message');", ['block' => true]);
?>

<!--<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>-->
