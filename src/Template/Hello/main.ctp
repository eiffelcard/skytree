	<div class="row">
    	<div class="col-xs-12 ">
        <div class="btn-group btn-group-justified">
          <?= $this->Html->link(__('ホーム'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-success"]) ?>
          <?= $this->Html->link(__('友だち'), ['controller' => 'UserSettings', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
            <?= $this->Html->link(__('カード'), ['controller' => 'ProductMasters', 'action' => 'index2'],['class'=>"btn btn-primary"]) ?>
          <?= $this->Html->link(__('設定'), ['controller' => 'Hello', 'action' => 'setting'],['class'=>"btn btn-primary"]) ?>
        </div>
</div>
	<div class="col-xs-12 ">
<br><br>
<h1 style="text-align:center">今すぐに手紙書こう！</h1>
</div>

<div class="col-xs-2 col-xs-offset-5">

  <p style="align:center"><?= $this->Html->link(__('write'), ['controller' => 'Hello', 'action' => 'main'],['class'=>"btn btn-success center-block"]) ?></p>
</div>
