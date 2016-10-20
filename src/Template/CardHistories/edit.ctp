<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cardHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cardHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Card Histories'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cardHistories form large-9 medium-8 columns content">
    <?= $this->Form->create($cardHistory) ?>
    <fieldset>
        <legend><?= __('Edit Card History') ?></legend>
        <?php
            echo $this->Form->input('sender');
            echo $this->Form->input('receiver');
            echo $this->Form->input('productcode');
            echo $this->Form->input('message');
            echo $this->Form->input('is_delivered');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
