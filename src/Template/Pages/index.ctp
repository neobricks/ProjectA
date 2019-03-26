

<h1>Pages</h1>
<p><?= $this->Html->link("Add Page", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <?php foreach ($pages as $page): ?>
        <tr>
            <td>
                <?= $this->Html->link($page->title, ['action' => 'view', $page->slug]) ?>
                $page
            <td>
                <?= $page->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $page->slug]) ?>
                <?= $this->Form->postLink(
                    'Delete',
                    ['action' => 'delete', $page->slug],
                    ['confirm' => 'Are you sure?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>