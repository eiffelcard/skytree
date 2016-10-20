<div class="row">
    <div class="col-xs-12 ">
      <div class="btn-group btn-group-justified">
        <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-primary"]) ?>
        <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-success"]) ?>
      </div>

<br><br>


    <p><?= $this->Html->link(__('ユーザー設定はこちら'), ['controller' => 'UserSettings', 'action' => 'edit/6']) ?></p>
      <p><?= $this->Html->link(__('カード登録はこちら'), ['controller' => 'ProductMasters', 'action' => 'pic']) ?></p>
        <p><?= $this->Html->link(__('ユーザー登録はこちら'), ['controller' => 'Users', 'action' => 'add']) ?></p>
  </div>
</div>
