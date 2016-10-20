<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Card History'), ['action' => 'edit', $cardHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Card History'), ['action' => 'delete', $cardHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cardHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Card Histories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Card History'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cardHistories view large-9 medium-8 columns content">
    <h3><?= h($cardHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cardHistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sender') ?></th>
            <td><?= $this->Number->format($cardHistory->sender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver') ?></th>
            <td><?= $this->Number->format($cardHistory->receiver) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Productcode') ?></th>
            <td><?= $this->Number->format($cardHistory->productcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Delivered') ?></th>
            <td><?= $this->Number->format($cardHistory->is_delivered) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cardHistory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cardHistory->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Message') ?></h4>
        <?= $this->Text->autoParagraph(h($cardHistory->message)); ?>
    </div>
</div>
