<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
echo $this->Html->scriptBlock( "toastr.success('$message');", ['block' => true]);
?>

<!--<div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>-->
