<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Settings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userSettings form large-9 medium-8 columns content">
    <?= $this->Form->create(
    null,
    array('url' =>'/user-settings/pic' ,'type'=>'file')
  ); ?>
    <fieldset>
        <legend><?= __('Add User pic') ?></legend>
        <?php

            echo $this->Form->input('file',
            array('type'=>'file','label'=>'写真'));

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
