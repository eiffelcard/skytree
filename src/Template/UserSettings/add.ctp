<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Settings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($userSetting) ?>
    <fieldset>
        <legend><?= __('Add User Setting') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('picture');
            echo $this->Form->input('display_name');
            echo $this->Form->input('firstname_local');
            echo $this->Form->input('lastname_local');
            echo $this->Form->input('birthday', ['empty' => true]);
            echo $this->Form->input('language');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
