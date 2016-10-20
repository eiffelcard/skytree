<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Master'), ['action' => 'edit', $productMaster->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Master'), ['action' => 'delete', $productMaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productMaster->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Masters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Master'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productMasters view large-9 medium-8 columns content">
    <h3><?= h($productMaster->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productMaster->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Number') ?></th>
            <td><?= $this->Number->format($productMaster->product_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($productMaster->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productMaster->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productMaster->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Product Picture') ?></h4>
        <?= $this->Text->autoParagraph(h($productMaster->product_picture)); ?>
    </div>
    <div class="row">
        <h4><?= __('Product Name') ?></h4>
        <?= $this->Text->autoParagraph(h($productMaster->product_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Category') ?></h4>
        <?= $this->Text->autoParagraph(h($productMaster->category)); ?>
    </div>
</div>
