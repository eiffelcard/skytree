<?php error_reporting(0); ?>

<div class="userSettings form large-9 medium-8 columns content">
    <?= $this->Form->create($userSetting, array('type' => 'file', 'enctype' => 'multipart/form-data'));?>
    <fieldset>
        <legend><?= __('ユーザー情報の登録') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('file',
            array('type'=>'file','label'=>'写真'));
            echo $this->Form->input('display_name');
            echo $this->Form->input('firstname_local');
            echo $this->Form->input('lastname_local');
              echo $this->Form->input('birthday');
          /*  echo $this->Form->input('birthday', array(
    'type' => 'date',
    'dateFormat' => 'Ymd',
    'maxYear' => date('Y') ,
    'minYear' => date('Y') - 70,));*/
            echo $this->Form->input('language');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
