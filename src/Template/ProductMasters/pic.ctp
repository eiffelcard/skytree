<?php error_reporting(0); ?>
<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
      <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-success"]) ?>
      </div></div>


          <div class="col-xs-12 ">
    <?= $this->Form->create($productMaster, array('type' => 'file', 'enctype' => 'multipart/form-data'));?>
    <fieldset>
        <legend><?= __('カードの登録') ?></legend>
        <?php
            echo $this->Form->input('product_number');
            echo $this->Form->input('file',
            array('type'=>'file','label'=>'写真'));
            echo $this->Form->input('product_name');
            echo $this->Form->input('category');
              echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
