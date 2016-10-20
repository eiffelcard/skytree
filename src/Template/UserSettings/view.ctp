<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Setting'), ['action' => 'edit', $userSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Setting'), ['action' => 'delete', $userSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Setting'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userSettings view large-9 medium-8 columns content">
    <h3><?= h($userSetting->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userSetting->has('user') ? $this->Html->link($userSetting->user->id, ['controller' => 'Users', 'action' => 'view', $userSetting->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($userSetting->language) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userSetting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($userSetting->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($userSetting->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($userSetting->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Picture') ?></h4>
        <?=($this->Html->image(h($userSetting->picture),array('alt'=>'CakePHP','height'=>'200','width'=>'200'))); ?> 
      <!--オリジナル  < ?= $this->Text->autoParagraph(h($userSetting->picture)); ?> -->
    </div>
    <div class="row">
        <h4><?= __('Display Name') ?></h4>
        <?= $this->Text->autoParagraph(h($userSetting->display_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Firstname Local') ?></h4>
        <?= $this->Text->autoParagraph(h($userSetting->firstname_local)); ?>
    </div>
    <div class="row">
        <h4><?= __('Lastname Local') ?></h4>
        <?= $this->Text->autoParagraph(h($userSetting->lastname_local)); ?>
    </div>
</div>
