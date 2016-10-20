<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-success"]) ?>
      </div>

      <div class="col-xs-12 ">
<?= $this->Form->create($userSetting, array('type' => 'file', 'enctype' => 'multipart/form-data'));?>
    <fieldset>
        <legend><?= __('Edit User Setting') ?></legend>
  <td><?=($this->Html->image(h($userSetting->picture),array('alt'=>'CakePHP','height'=>'200','width'=>'400'))); ?></td>

        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
              echo $this->Form->input('file',
            array('type'=>'file','label'=>'写真'));
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
