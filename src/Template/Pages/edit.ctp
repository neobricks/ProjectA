
<h1>Edit Page</h1>
<?php
echo $this->Form->create($page);
echo $this->Form->control('title');
echo $this->Form->control('body', ['rows' => '3']);
echo $this->Form->control('published');
echo $this->Form->button(__('Save Page'));
echo $this->Form->end();
?>