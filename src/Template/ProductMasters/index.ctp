<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product Master'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('New User Setting'), ['controller' => 'UserSettings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productMasters index large-9 medium-8 columns content">
    <h3><?= __('Product Masters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productMasters as $productMaster): ?>
            <tr>
                <td><?= $this->Number->format($productMaster->id) ?></td>
                <td><?= $this->Number->format($productMaster->product_number) ?></td>
                <td><?= $this->Number->format($productMaster->price) ?></td>
                <td><?= h($productMaster->created) ?></td>
                <td><?= h($productMaster->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productMaster->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productMaster->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productMaster->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
